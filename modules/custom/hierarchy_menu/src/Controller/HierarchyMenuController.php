<?php
/**
 * @file
 * Contains \Drupal\hierarchy_menu\Controller\HierarchyMenuController.
 */

namespace Drupal\hierarchy_menu\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\image\Entity\ImageStyle;
use Symfony\Component\HttpFoundation\JsonResponse;

class HierarchyMenuController extends ControllerBase {
/**
 * @return mixed
 */
  public function content() {
//    field_node_reference
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'menu_element']);

    foreach ($entities as $entity ){
      $title =  $entity -> get('title')->getValue();
      $nid =  $entity -> get('nid')->getValue();
      $reference =  $entity -> get('field_node_reference')->getValue();
      // $image = ImageStyle::load('medium')->buildUrl( $entity->get('field_menu_image')->entity->getFileUri());
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


    return new JsonResponse( $children_bush );
  }
}
