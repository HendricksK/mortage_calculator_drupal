<?php
/**
* @file
* Contains \Drupal\mortageCalculator\MortageCalculatorController.
*/

namespace Drupal\mortageCalculator;

use Drupal\Core\Controller\ControllerBase;

class MortageCalculatorController extends ControllerBase {
	public function content() {
		return array(
			'#markup' => '' . t('Hello World') . '',
		);
	}
}