<?php

namespace Craue\FormFlowBundle\Tests\Form;

use Craue\FormFlowBundle\Form\Step;

/**
 * Tests for BC.
 *
 * @group legacy
 * @group unit
 *
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2016 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class StepBcTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedDeprecation Step config option "type" is deprecated since version 3.0. Use "form_type" instead.
	 */
	public function testCreateFromConfig_bcOptionType() {
		$step = Step::createFromConfig(1, array(
			'type' => 'myFormType',
		));

		$this->assertEquals('myFormType', $step->getFormType());
	}

}
