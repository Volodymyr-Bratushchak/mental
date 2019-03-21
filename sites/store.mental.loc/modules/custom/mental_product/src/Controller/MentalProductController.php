<?php
///**
// * @file
// * Contains \Drupal\mental_product\Controller\MentalProductController.
// */
//
//namespace Drupal\mental_product\Controller;
//
//use Drupal\Core\Controller\ControllerBase;
//use Drupal\Core\Url;
//
//class MentalProductController extends ControllerBase {
//
//  public function content() {
//    $user_role = \Drupal::currentUser()->getRoles();
//    if (in_array("administrator", $user_role) || in_array('distributor', $user_role)) {
//      $products = \Drupal\commerce_product\Entity\Product::loadMultiple();//loadByProperties(['uid' => $user_id]);
//      $count = 0;
//      $product_list = [];
//      foreach ($products as $product) {
//        $owner_role = $product->getOwner()->getRoles();
////        if (in_array("manufacturer", $owner_role)) {
//          $count++;
//          $product_list[$count]['id'] = $product->id();
//          $product_list[$count]['title'] = $product->getTitle();
//          $product_list[$count]['link'] = Url::fromRoute(
//            'mental_product.form',
//            ['product_id' => $product->id()]
//          )->toString();
////        }
//      }
//      return ([
//        '#theme' => 'mental_product_list_template',
//        '#product_list' => $product_list,
//      ]);
//    }
//  }
//}
//
//
//
//
