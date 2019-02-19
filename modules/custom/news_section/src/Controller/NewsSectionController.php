<?php
/**
 * @file
 * Contains \Drupal\news_section\Controller\NewsSectionController.
 */

namespace Drupal\news_section\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class NewsSectionController extends ControllerBase {
  
  /**
   * @return mixed
   */
  public function content($section) {
    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->fields('ti', ['nid']);
    $query->condition('ti.tid', $section);
    $query->range(0, 3);
    $nodes = $query->execute()->fetchAll();
    foreach ($nodes as $node) {
      $nid = $node->nid;
      $article = \Drupal::entityTypeManager()->getStorage('node')->load($nid);
      $title =  $article->getTitle();
      $image = file_create_url($article->field_photo->entity->uri->value);
      $data[$nid] =[
        'nid' => $nid,
        'title' => $title,
        'image' => $image,
      ];
    }
    return new JsonResponse($data);
  }
}
