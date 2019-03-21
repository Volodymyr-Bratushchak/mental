<?php

/**
* @file
* Contains \Drupal\mental_product\Form\MentalProductForm.
*/

namespace Drupal\mental_product\Form;

use Drupal\commerce_price\Price;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use phpseclib\Crypt\Random;

/**
* Form for sending letters on email.
*/
class MentalProductForm extends FormBase {

  /**
  * {@inheritdoc}
  */
  public function getFormId() {
    return 'mental_product';
  }

  /**
  * {@inheritdoc}
  */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['Price'] = [
      '#title' => t('Quantity'),
      '#type' => 'number',
      '#attributes' => [
        'type' => 'number',
        'min' => 1,
      ],
    ];
    $form['sku'] = [
      '#title' => t('Quantity'),
      '#type' => 'text',
//      '#default_value' => 1,
    ];
    $form['status'] = [
      '#title' => t('Quantity'),
      '#type' => 'bool',
    ];


    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Order'),
//      '#suffix' => '<a href="' .
//        $url_products_list .
//        '"><h3>back to Manufacture products list ...</h3></a>',
    ];

    return $form;
  }

  /**
  * {@inheritdoc}
  */
  public function validateForm(array &$form, FormStateInterface $form_state) { }

  /**
  * {@inheritdoc}
  */
  public function submitForm(array &$form, FormStateInterface $form_state) {

//      Creating Price
    $price = new Price('24.99', 'USD');

//      Creating product variation
      $variation = \Drupal\commerce_product\Entity\ProductVariation::create ([
        'type' => 'default', // The default variation type is 'default'.
        'sku' => '000000005',//$entity_data['variations'][0]['sku'], // The variation sku.
        'status' => 1, // The product status. 0 for disabled, 1 for enabled.
        'price' =>  $price,
      ]);
      $variation->save();

//      Load store
      $store_id = 1;
      $store = \Drupal\commerce_store\Entity\Store::load($store_id);

    $product = \Drupal\commerce_product\Entity\Product::create([
      'uid' => 1, // The user id that created the product.
      'type' => 'default', // Just like variation, the default product type is 'default'.
      'title' => 'MentalProduct2',
      'stores' => [$store], // The store we created/loaded above.
      'variations' => [$variation], // The variation we created above.
    ]);
    $product->save();

// You can also add a variation to a product using the addVariation() method.
//    $product->addVariation($variation);
//    $product->save();

    return ;
  }
}
