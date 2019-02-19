<?php

/**
* @file
* Contains \Drupal\fact_generator\Plugin\Block\FactGeneratorBlock.
*/

namespace Drupal\fact_generator\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides Selected nodes Block.
*
* @Block(
* id = "fact_generator",
* admin_label = @Translation("Fact Generator Block"),
* category = @Translation("Blocks")
* )
*/
class FactGeneratorBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\fact_generator\Form\FactGeneratorForm');
    return $form;
  }
}
