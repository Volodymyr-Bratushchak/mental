<?php

/**
* @file
* Contains \Drupal\cart_checkout\Plugin\Block\CartItemsBlock.
*/
namespace Drupal\cart_checkout\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
* Form for redirect on node.
*
* @Block(
* id = "cart_items",
* admin_label = @Translation("Cart Items Block"),
* category = @Translation("Blocks")
* )
*/

class CartItemsBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */

  public function build() {
    $store_id = 1;
    $order_type = 'default';
    $cart_provider = \Drupal::service('commerce_cart.cart_provider');
    $entity_manager = \Drupal::entityManager();
    $store = $entity_manager->getStorage('commerce_store')->load($store_id);
    $cart = $cart_provider->getCart($order_type, $store);
    $cart_items = $cart-> getItems();
    $total_items = count($cart_items);
    $total_cart =  $cart->getSubtotalPrice();
    $cart_id = $cart->id();
    $url = Url::fromRoute('commerce_checkout.form',
      ['commerce_order' => $cart_id]);
    $checkout = $url->toString();

    $cart_info = [
      'total_items' => $total_items,
      'total_cart' => $total_cart,
      'order_id' => $cart_id,
      'checkout' => $checkout,
    ];

    // #buiid = $variations - for building table from cart items
    $variations = [];
    foreach ($cart_items as $item){
      $product = $item->getPurchasedEntity()->getProduct();
      $pid = $product->id();
      $product_title = $product->getTitle();
      $image_id =$product->get('field_product_image')->getValue()[0]['target_id'];
      $file = \Drupal\file\Entity\File::load($image_id);
      $image_path = $file->getFileUri();
      $image = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($image_path);

      $var_item = [
        'title' => $item->getTitle(),
        'product_title' =>$product_title,
        'quantity' => (int) $item->getQuantity(),
        'unit_price' =>  $item->getUnitPrice(),
        'total_price' =>  $item->getTotalPrice(),
        'cur' => $item->getTotalPrice()->getCurrencyCode(),
        'changed' => $item->get('changed')->getValue()[0]['value'],
        'pid' => $pid,
        'image' => $image,
      ];
      $variations[$pid] = $var_item;
      $time[$pid] = $var_item['changed'];
    }
    // Sorting the cart items by time 'changed'
    array_multisort($time, SORT_DESC, $variations);
    // getting the last changed product for showing the last product that has added to cart
    $lp_variation = reset($variations);
    $product_info = [
      'title' => $lp_variation['product_title'],
      'image' => $lp_variation['image'],
      'var_title' => $lp_variation['title'],
      'price' => $lp_variation['unit_price'],
    ];
    // Views block for building in the template of custom block
    $machine_name = 'related_goods';
    $view = \Drupal\views\Views::getView($machine_name);
    // Giving product_id argument for contextual filter
    $args = [$lp_variation['pid']];
    $view->setArguments($args);
    $view->setDisplay('block_1');
    $view->preExecute();
    $view->execute();
    $render = $view->buildRenderable('block_1', $args);

    return ([
      '#theme' => 'cart_items_template',
      '#build' => $variations,
      '#render' => $render,
      '#product' => $product_info,
      '#cart_info' => $cart_info,
      '#attached' => ['library' => ['core/drupal.dialog.ajax']]
    ]);
  }
}
