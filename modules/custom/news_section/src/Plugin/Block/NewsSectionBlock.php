<?php

/**
* @file
* Contains \Drupal\news_section\Plugin\Block\NewsSectionBlock.
*/

namespace Drupal\news_section\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides Selected nodes Block.
*
* @Block(
* id = "news_section",
* admin_label = @Translation("News Section Block"),
* category = @Translation("Blocks")
* )
*/
class NewsSectionBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $terms = \Drupal::entityManager()->getStorage('taxonomy_term')->loadTree('Tags');
    $sections = [];
    foreach ($terms as $term) {
      $parent = $term->parents[0];
      if ($parent == 7) {
        $sections[] = [
          'tid' => $term->tid,
          'name' => $term->name,
        ];
      }
    }
    return ([
      '#theme' => 'news_section_template',
      '#sections' => $sections,
    ]);
  }
}