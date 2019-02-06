<?php

/**
* @file
* Contains \Drupal\footer_menu\Plugin\Block\FooterMenuBlock.
*/

namespace Drupal\footer_menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\taxonomy\Entity\Term;

/**
* Provides Footer Menu Block.
*
* @Block(
* id = "footer_menu",
* admin_label = @Translation("Footer Menu Block"),
* category = @Translation("Blocks")
* )
*/
class FooterMenuBlock extends BlockBase {
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
      '#theme' => 'footer_menu_template',
      '#menu_items' => $menu_items,
    ]);
  }
}