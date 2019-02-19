<?php

/**
* @file
* Contains \Drupal\header_menu\Plugin\Block\HeaderMenuBlock.
*/

namespace Drupal\header_menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\taxonomy\Entity\Term;

/**
* Provides Header Menu Block.
*
* @Block(
* id = "header_menu",
* admin_label = @Translation("Header Menu Block"),
* category = @Translation("Blocks")
* )
*/
class HeaderMenuBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build()  {
    $terms = \Drupal::entityManager()->getStorage('taxonomy_term')->loadTree('Tags');
    $menu_items = [];
    foreach ($terms as $term) {
      $parent = $term->parents[0];
      if ($parent != FALSE) {
        $parent_term = Term::load($parent);
        $parent_name = $parent_term->getName();
        $menu_items[$parent_name][] = [
          'tid' => $term->tid,
          'name' => $term->name,
        ];
      }
    }
    return ([
      '#theme' => 'header_menu_template',
      '#menu_items' => $menu_items,
    ]);
  }
}