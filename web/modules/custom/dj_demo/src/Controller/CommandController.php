<?php

/**
 * @file
 * Contains \Drupal\dj_demo\Controller\CommandController.
 */

namespace Drupal\dj_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class CommandController extends ControllerBase {

  public function messagesPage() {
    return [
      '#markup' => '<a href="#" id="click-me" class="button">Click me!</a>'
    ];
  }

}