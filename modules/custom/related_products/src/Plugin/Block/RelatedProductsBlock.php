<?php

/**
* @file
* Contains \Drupal\related_products\Plugin\Block\RelatedProductsBlock.
*/
namespace Drupal\related_products\Plugin\Block;

use Drupal\commerce_product\Entity\Product;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;

/**
* Form for redirect on node.
*
* @Block(
* id = "related_products",
* admin_label = @Translation("Related Products"),
* category = @Translation("Blocks")
* )
*/

class RelatedProductsBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */

  public function build( ) {
    $current_path = \Drupal::request()->getPathInfo();
    $path_args = explode('/', $current_path);
    $product_id = $path_args[2];

    $parameter = \Drupal::routeMatch()->getParameter('commerce_product');
    $product = \Drupal\commerce_product\Entity\Product::load((int)$parameter->id());

//    $product = Product::loadByProperties(['product_id' => $product_id ]);
//    loadMultiple(); //
//$title = $product->getTitle();
//kint($title);
    return ('');
//      ['#theme' => 'related_products_template',
//      '#test' => $product_id]
  }
}
