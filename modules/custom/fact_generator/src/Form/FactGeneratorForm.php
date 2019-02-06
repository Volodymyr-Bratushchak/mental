<?php
/**
 * @file
 * Contains \Drupal\fact_generator\Form\FactGeneratorForm.
 */

namespace Drupal\fact_generator\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Form with modal window.
 */
class FactGeneratorForm extends FormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'ajax_form_submit_example';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    if ($form_state->get('facts') === NULL) {
      $query = \Drupal::database()->select('fact', 'ft');
      $query->fields('ft', ['vid']);
      $query->orderRandom();
      $facts = $query->execute()->fetchAll();
      $form_state->set('facts', $facts);
    }

    $facts = $form_state->get('facts');
    $vid = $facts[0]->vid;
    $entity = \Drupal::entityTypeManager()->getStorage('fact')->load($vid);
    $data['name'] = $entity->name->getValue()[0]['value'];
    $data['body'] = $entity->body->getValue()[0]['value'];
    $fid = $entity->image->getValue()[0]['target_id'];
    $file = \Drupal\file\Entity\File::load($fid);
    $url = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($file->getFileUri());
    $data['image'] = $url;
    $message = '<div id="generator-block"><p>' .
      $data['body'] .
      '</p><div class="generator_image"><img src="' .
      $data['image'] . '"></div></div>';

    $form['system_messages'] = [
      '#markup' => $message,
//        '<div id="generator-block"><h2>Let\'s start to generate the facts!</h2></div>',
      '#weight' => -100,
    ];


    $form['submit'] = [
      '#type' => 'submit',
      '#name' => 'submit',
      '#value' => 'More Fact!',
      '#ajax' => [
        'callback' => '::ajaxSubmitCallback',
        'event' => 'click',
        'progress' => [
          'type' => 'throbber',
        ],
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $counter = $form_state->get('counter');
    if ($counter === NULL) {
      $counter = 1;
    } else  {
      $counter += 1;
    }
    $form_state->set('counter', $counter);
    $form_state->setRebuild();
  }

  /**
   * {@inheritdoc}
   */
  public function ajaxSubmitCallback(array &$form, FormStateInterface $form_state) {
    $counter = $form_state->get('counter');
    $facts = $form_state->get('facts');
    $vid = $facts[$counter]->vid;
    $ajax_response = new AjaxResponse();
    if ($counter < sizeof($facts)) {
      $entity = \Drupal::entityTypeManager()->getStorage('fact')->load($vid);
      $data['name'] = $entity->name->getValue()[0]['value'];
      $data['body'] = $entity->body->getValue()[0]['value'];
      $fid = $entity->image->getValue()[0]['target_id'];
      $file = \Drupal\file\Entity\File::load($fid);
//      $url = Url::fromUri($file);
      $url = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($file->getFileUri());
      $data['image'] = $url;
      $message = '<div id="generator-block"><p>' .
//        $vid .' name:' .
         $data['body'] . '</p><div class="generator_image"><img src="' . $data['image'] . '"></div></div>';
    } else {
      $message = '<div id="generator-block"><h2>Thats all facts for now! ;)</h2></div>';
    }
    $ajax_response->addCommand(new HtmlCommand('#generator-block', $message));

    return $ajax_response;
  }
}

