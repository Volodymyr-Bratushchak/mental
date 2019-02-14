<?php
///**
// * @file
// * Contains \Drupal\last_news\Controller\LastNewsController.
// */
//
//namespace Drupal\last_news\Controller;
//
//use Drupal\Core\Controller\ControllerBase;
//use Symfony\Component\HttpFoundation\JsonResponse;
//
//class LastNewsController extends ControllerBase {
//
//  /**
//   * @return mixed
//   */
//  public function content() {
//    $entities = \Drupal::entityTypeManager()->getStorage('node')->    loadByProperties([
//      'type' => ['page', 'article'],
//    ]);
//    $node = $entities[0];
//    $nid = $node->nid;
//
//    $title =  $node->getTitle();
//    $image = file_create_url($node->field_photo->entity->uri->value);
//    $data[$nid] =[
//      'nid' => $nid,
//      'title' => $title,
//      'image' => $image,
//    ];
//    return ;
//    }
//  }
//
