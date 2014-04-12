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
    $best_sandwich = array(
      '#theme' => 'sandwich',
      '#name' => $this->t('Chickado'),
      '#attributes' => array(
        'id' => 'best-sandwich',
        'style' => 'float: left;',
        'class' => array('left', 'clearfix'),
      ),
      '#bread' => $this->t('Sourdough'),
      '#cheese' => $this->t('Gruyère'),
      '#veggies' => array($this->t('Avocado'), $this->t('Red onion'), $this->t('Romain')),
      '#protein' => $this->t('Chicken'),
      '#condiments' => array($this->t('Mayo'), $this->t('Dijon')),
    );

    $alt_best_sandwich = array(
      '#theme' => 'sandwich',
      '#name' => $this->t('Vegan'),
      '#attributes' => array(
        'id' => 'alt-sandwich',
        'style' => 'float: right;',
        'class' => array('right', 'clearfix'),
      ),
      '#bread' => $this->t('Multigrain'),
      '#veggies' => array($this->t('Avocado'), $this->t('Tomato'), $this->t('Arugula')),
      '#protein' => $this->t('Faken'),
      '#condiments' => array($this->t('Dijon'), $this->t('Vegan Mayo')),
    );
    return array(
      '#type' => 'container',
      '#attributes' => array('class' => array('admin')),
      $best_sandwich,
      $alt_best_sandwich,
    );
  }

}
