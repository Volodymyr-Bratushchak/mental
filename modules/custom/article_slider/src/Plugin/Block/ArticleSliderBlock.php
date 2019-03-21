<?php

/**
* @file
* Contains \Drupal\article_slider\Plugin\Block\ArticleSliderBlock.
*/
namespace Drupal\article_slider\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\taxonomy\Entity\Term;

/**
* Article Slider nodes Block.
*
* @Block(
* id = "article_slider",
* admin_label = @Translation("Article Slider"),
* category = @Translation("Blocks")
* )
*/
class ArticleSliderBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */
  public function build() {
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => ['page', 'article'],]);
    foreach ($entities as $entity) {
      $nid = $entity->get('nid')->getValue()[0]['value'];
      $name = $entity->get('field_title')->getValue()[0]['value'];
      $image = file_create_url($entity->get('field_photo')->entity->getFileUri());
      $tid = $entity->get('field_tags')->getValue()[0]['target_id'];
      $termine = Term::load($tid)->getName();
      $variables[] = [
        'nid' => $nid,
        'name' => $name,
        'image' => $image,
        'termine' => $termine,
      ];
    }
    return ([
      '#theme' => 'article_slider_template',
      '#slides' => $variables,
    ]);
  }
}

