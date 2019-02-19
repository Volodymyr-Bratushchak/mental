<?php
/**
 * @file
 * Contains \Drupal\subscribe_us\Controller\SubscribeUsController.
 */

namespace Drupal\subscribe_us\Controller;

use Drupal\Core\Controller\ControllerBase;


class SubscribeUsController extends ControllerBase {
/**
 * @return mixed
 */
  public function content() {
    $build = array();
    $build['form'] = \Drupal::formBuilder()->getForm('Drupal\subscribe_us\Form\SubscribeUsForm');
    return $build;
  }
}
