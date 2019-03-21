<?php

namespace Drupal\store_breadcrumb\Breadcrumb;

use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Link;
 
class StoreBreadcrumbBuilder implements BreadcrumbBuilderInterface {
 /**
  * {@inheritdoc}
  */
 public function applies(RouteMatchInterface $attributes) {
   $parameters = $attributes->getParameters()->all();
   if ((isset($parameters['commerce_product']) && !empty($parameters['commerce_product'])) or
     (isset($parameters['taxonomy_term']) && !empty($parameters['taxonomy_term']))) {
     return TRUE;
   }
 }
 
 /**
  * {@inheritdoc}
  */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();
    $breadcrumb->addLink(Link::createFromRoute('Home', '<front>'));
    $parameters = $route_match->getParameters()->all();
    if (isset($parameters['taxonomy_term'])) {
      $term_link = $parameters['taxonomy_term']->toLink();
      $breadcrumb->addLink($term_link );
    }
    if (isset($parameters['commerce_product'])) {
      $tid = $parameters['commerce_product']->get('field_product_kind')->target_id;
      $term = \Drupal\taxonomy\Entity\Term::load($tid);
      $term_link = $term->toLink();
      $produt_title = $parameters['commerce_product']->getTitle();
      $breadcrumb->addLink($term_link);
      $breadcrumb->addLink(Link::createFromRoute($produt_title, '<none>'));
    }
    // Added cache control by a route,
    // otherwise you will surprice,
    // all breadcrumb will be the same for all pages.
    $breadcrumb->addCacheContexts(['route']);

    return $breadcrumb;
  }

}
