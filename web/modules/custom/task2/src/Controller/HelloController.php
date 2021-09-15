<?php

namespace Drupal\task2\Controller;

class HelloController {

  public function page() {

    $hello = 'HELLO WORLD!';

    return array(
      '#theme' => 'saluto',
      '#hello' => $hello,
      '#title' => 'Hello World Twig Theme'
    );
  }
}
