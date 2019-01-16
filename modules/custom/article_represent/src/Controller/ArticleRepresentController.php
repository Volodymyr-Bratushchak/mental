<?php
/**
 * @file
 * Contains \Drupal\article_represent\Controller\ArticleRepresentController.
 */

namespace Drupal\article_represent\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleRepresentController extends ControllerBase {
  /**
   * @return mixed
   */
  public function content() {
//    field_node_reference
    $entities = \Drupal::entityTypeManager()->
      getStorage('node')->
        loadByProperties([
          'type' => ['page', 'article'],
        ]);

    foreach ($entities as $entity ){
//      $title =  $entity -> get('title')->getValue();
//      $nid =  $entity -> get('nid')->getValue();
//      $reference =  $entity -> get('field_node_reference')->getValue();

      $paragraph =  $entity -> get('field_paragraphs')->getValue();
//      $para = $entity->field_title->referencedEntities();

      if($paragraph){
        foreach ( $paragraph as $element ) {
          $p = \Drupal\paragraphs\Entity\Paragraph::load( $element['target_id'] );
          $title = $p->field_title->getValue()[0]['value'];
//          $text[] = $p->field_text->getValue();
          $paragraph_data[] = $title;
//          kint($paragraph_data);
        }
      }
    }

//      $image = ImageStyle::load('medium')->buildUrl( $entity->get('field_menu_image')->entity->getFileUri());
//      $image = file_create_url($entity->get('field_menu_image')->entity->getFileUri());



    return ([
      '#theme' => 'article_represent_template',
      '#paragraph_data'=> $paragraph_data,
    ]);
  }
}