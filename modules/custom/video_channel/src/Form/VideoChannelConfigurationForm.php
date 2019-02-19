<?php

namespace Drupal\video_channel\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures forms module settings.
 */
class VideoChannelConfigurationForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'video_channel_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'video_channel.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('video_channel.settings');
    $form['channelId'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Channel id'),
      '#default_value' => $config->get('UCfM3zsQsOnfWNUppiycmBuw'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('video_channel.settings')
      ->set('channelId', $values['channelId'])
      ->save();
    parent::submitForm($form, $form_state);
  }

}