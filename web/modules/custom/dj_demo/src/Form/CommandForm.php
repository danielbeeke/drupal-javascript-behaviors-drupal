<?php

namespace Drupal\dj_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\dj_demo\Ajax\MessageCommand;

class CommandForm extends FormBase {

  public function getFormId() {
    return 'command_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Trigger ajax'),
      '#button_type' => 'primary',
      '#ajax' => [
        'callback' => array($this, 'triggerAjaxCommand'),
        'event' => 'click',
        'progress' => array(
          'type' => 'throbber',
          'message' => t('Triggering...'),
        ),
      ],
    );

    return $form;
  }

  public function triggerAjaxCommand (array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $response->addCommand(new MessageCommand('Lorem ipsum'));
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}


}