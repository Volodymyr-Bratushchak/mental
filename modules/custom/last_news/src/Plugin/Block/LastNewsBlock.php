<?php

/**
* @file
* Contains \Drupal\last_news\Plugin\Block\LastNewsBlock.
*/

namespace Drupal\last_news\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\taxonomy\Entity\Term;

/**
* Provides Selected nodes Block.
*
* @Block(
* id = "last_news",
* admin_label = @Translation("Last News Block"),
* category = @Translation("Blocks")
* )
*/
class LastNewsBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => ['page', 'article'],
    ]);
    foreach ($entities as $node) {
      $nid = $node->get('nid')->getValue()[0]['value'];
      $tid = $node->get('field_tags')->getValue()[0]['target_id'];
      $title = $node->getTitle();
      $image = file_create_url($node->field_photo->entity->uri->value);
      $termine = Term::load($tid)->getName();
      $articles[$nid] = [
        'nid' => $nid,
        'title' => $title,
        'image' => $image,
        'tid' => $tid,
        'termine' => $termine,
        ];
    }
    return [
      '#theme' => 'last_news_template',
      '#articles' => $articles,

    ];
  }
}
