<?php

/**
 * @file
 * Contains \Drupal\sandwich\Controller\SandwichController.
 */

namespace Drupal\sandwich\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for sandwich module routes.
 */
class SandwichController extends ControllerBase {

  /**
   * Builds a sandwich.
   */
  public function build() {

    $best_sandwich = [
      '#theme' => 'sandwich',
      '#name' => $this->t('Chickado'),
      '#attributes' => [
        'id' => 'best-sandwich',
        'style' => 'float: left;',
        'class' => ['left', 'clearfix'],
      ],
      '#bread' => $this->t('Sourdough'),
      '#cheese' => $this->t('Gruyère'),
      '#veggies' => [
        $this->t('Avocado'),
        $this->t('Red onion'),
        $this->t('Romaine'),
      ],
      '#protein' => $this->t('Chicken'),
      '#condiments' => [
        $this->t('Mayo'),
        $this->t('Dijon'),
      ],
    ];

    $alt_best_sandwich = [
      '#theme' => 'sandwich',
      '#name' => $this->t('Vegan'),
      '#attributes' => [
        'id' => 'alt-sandwich',
        'style' => 'float: right;',
        'class' => ['right', 'clearfix'],
      ],
      '#bread' => $this->t('Multigrain'),
      '#veggies' => [
        $this->t('Avocado'),
        $this->t('Tomato'),
        $this->t('Arugula'),
      ],
      '#protein' => $this->t('Faken'),
      '#condiments' => [
        $this->t('Dijon'),
        $this->t('Vegan Mayo'),
      ],
    ];
    $path = drupal_get_path('module', 'sandwich');
    return [
      '#title' => 'Menu',
      '#type' => 'container',
      '#attached' => ['css' => ['/' . $path . '/css/flavour.css']],
      '#attributes' => ['class' => ['admin']],
      $best_sandwich,
      $alt_best_sandwich,
    ];
  }

}
