<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\MortageCalculatorBlock.
 */

namespace Drupal\mortageCalculator\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Mortage Calculator' Block.
 *
 * @Block(
 *   id = "mortage_calculator_block",
 *   admin_label = @Translation("Mortage Calculator Block"),
 *	 category = @Translation("Custom")
 * )
 */
class MortageCalculatorBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }

}