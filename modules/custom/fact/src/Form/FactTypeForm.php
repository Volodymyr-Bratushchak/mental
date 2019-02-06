<?php

namespace Drupal\fact\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FactTypeForm.
 */
class FactTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $fact_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $fact_type->label(),
      '#description' => $this->t("Label for the Fact type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $fact_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\fact\Entity\FactType::load',
      ],
      '#disabled' => !$fact_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $fact_type = $this->entity;
    $status = $fact_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Fact type.', [
          '%label' => $fact_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Fact type.', [
          '%label' => $fact_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($fact_type->toUrl('collection'));
  }

}
