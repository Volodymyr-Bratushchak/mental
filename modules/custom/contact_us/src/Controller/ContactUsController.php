<?php
/**
 * @file
 * Contains \Drupal\register_window\Controller\RegisterWindowController.
 */

namespace Drupal\contact_us\Controller;

use Drupal\Core\Controller\ControllerBase;


class ContactUsController extends ControllerBase {
/**
 * @return mixed
 */
  public function content() {
    $build = array();
    $build['form'] = \Drupal::formBuilder()->getForm('Drupal\contact_us\Form\ContactUsForm');
    return $build;
  }
}
