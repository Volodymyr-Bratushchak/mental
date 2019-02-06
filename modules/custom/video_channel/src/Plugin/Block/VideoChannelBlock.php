<?php

/**
* @file
* Contains \Drupal\video_channel\Plugin\Block\VideoChannelBlock.
*/
namespace Drupal\video_channel\Plugin\Block;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
* Provides Video Channel Block.
*
* @Block(
* id = "video_channel",
* admin_label = @Translation("Video Channel"),
* category = @Translation("Blocks")
* )
*/
class VideoChannelBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $baseUrl = 'https://www.googleapis.com/youtube/v3/';
    $apiKey = 'AIzaSyBFsGWP3Hr2wp1-zGw-PsemRxLJJk9HFb8';
    $video_channel_config = \Drupal::config('video_channel.settings');
    $channelId = $video_channel_config->get('channelId');

    // Load JSON of channel
    $params = [
      'id' => $channelId,
      'part' => 'contentDetails',
      'key' => $apiKey
    ];
    $url = $baseUrl . 'channels?' . http_build_query($params);
    $json_doc = (string) \Drupal::httpClient()->get($url, array('verify' => false))->getBody();
    $json = Json::decode($json_doc);

    // Load JSON of playlist
    $playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
    $params = [
      'part' => 'snippet',
      'playlistId' => $playlist,
      'maxResults' => '50',
      'key' => $apiKey,
      'reason'=> 'required',
    ];
    $url = $baseUrl . 'playlistItems?' . http_build_query($params);
    $json_doc = (string) \Drupal::httpClient()->get($url, array('verify' => false))->getBody();
    $json = Json::decode($json_doc);

    // PlaylistItems
    // Create array with key in the form of video ids and value of preview image
    $videos = [];
    foreach ($json['items'] as $video) {
      $video_id = $video['snippet']['resourceId']['videoId'];
      $videos[$video_id] = $video['snippet']['thumbnails']['medium']['url'];
    }

    $vars['width'] = ['#plain_text' => '100%'];
    $vars['height'] = ['#plain_text' => '200px'];
    $vars['content'] = $videos;



    return ([
      '#theme' => 'video_channel_template',
      '#youtube_content' => $vars,
    ]);
  }
}


