<?php

/**
* @file
* Contains \Drupal\hierarchy_menu\Plugin\Block\HierarchyMenuBlock.
*/
namespace Drupal\hierarchy_menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;

/**
* Provides Menu node Block.
*
* @Block(
* id = "hierarchy_menu",
* admin_label = @Translation("Hierarchy Menu Block"),
* category = @Translation("Blocks")
* )
*/
class HierarchyMenuBlock extends BlockBase {


  /**
  * {@inheritdoc}
  */
  public function build() {
//    field_node_reference
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'menu_element']);

    foreach ($entities as $entity ){
      $title =  $entity -> get('title')->getValue();
      $nid =  $entity -> get('nid')->getValue();
      $reference =  $entity -> get('field_node_reference')->getValue();
     // $image = ImageStyle::load('large')->buildUrl( $entity->get('field_menu_image')->entity->getFileUri());
      $image = file_create_url($entity->get('field_menu_image')->entity->getFileUri());
      $menu_elements[$nid[0]['value']] =[
        'title' => $nid[0]['value'] . '. ' . $title[0]['value'],
        'nid' => $nid[0]['value'],
        'reference' => ($reference[0]['target_id']),
        'image' => $image,
      ];
      if ($menu_elements[$nid[0]['value']]['reference'] == NULL ) {
        $parent_nid = $menu_elements[$nid[0]['value']]['nid'];
      }
    }

    //  Search for children
    foreach ($menu_elements as $element ){
      if ($element['reference'] == $parent_nid){
        $children_bush[] = $element;
      }
    }

    $parent_element =  $menu_elements[$parent_nid];

    return ([
      '#theme' => 'hierarchy_menu_template',
      '#parent_element'=> $parent_element,
      '#children_bush' => $children_bush,
    ]);
  }
}
