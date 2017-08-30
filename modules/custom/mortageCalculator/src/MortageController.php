<?php
/**
* @file
* Contains \Drupal\mortageCalculator\MortageController.
*/

namespace Drupal\mortageCalculator;

use Drupal\Core\Controller\ControllerBase;

class MortageController extends ControllerBase {
	public function content() {
		return array(
			'#markup' => '' . t('Hello World') . '',
		);
	}
}