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
    $parent_term_name = 'Sections';
    $parent_term = \Drupal::entityTypeManager()
      ->getStorage('taxonomy_term')
      ->loadByProperties(['name' => $parent_term_name]);
    $parent_id = reset($parent_term)->id();
    $sections = [];
    foreach ($terms as $term) {
      $parent = $term->parents[0];
      if ($parent == $parent_id) {
        $sections[] = [
          'tid' => $term->tid,
          'name' => $term->name,
        ];
      }
    }
    $default_section = 13;
    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->fields('ti', ['nid']);
    $query->condition('ti.tid', $default_section);
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

    return ([
      '#theme' => 'news_section_template',
      '#sections' => $sections,
      '#default_art' => $data,

    ]);
  }
}