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
        'class' => ['menu--left', 'clearfix'],
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
      '#name' => $this->t('Yummy'),
      '#attributes' => [
        'id' => 'alt-sandwich',
        'class' => ['menu--right', 'clearfix'],
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
    return [
      '#title' => 'Menu',
      '#type' => 'container',
      '#attached' => ['library' => ['sandwich/flavour']],
      '#attributes' => ['class' => ['admin']],
      $best_sandwich,
      $alt_best_sandwich,
    ];
  }

}
