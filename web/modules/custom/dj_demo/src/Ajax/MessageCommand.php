<?php
namespace Drupal\dj_demo\Ajax;
use Drupal\Core\Ajax\CommandInterface;

class MessageCommand implements CommandInterface {

  protected $message;

  public function __construct($message) {
    $this->message = $message;
  }

  public function render() {
    return array(
      'command' => 'readMessage',
      'message' => $this->message,
    );
  }
}