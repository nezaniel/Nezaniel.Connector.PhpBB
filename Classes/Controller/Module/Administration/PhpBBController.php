<?php
namespace Nezaniel\Connector\PhpBB\Controller\Module\Administration;

/*                                                                               *
 * This script belongs to the TYPO3 Flow package "Nezaniel.Connector.PhpBB".     *
 *                                                                               *
 * It is free software; you can redistribute it and/or modify it under           *
 * the terms of the GNU General Public License, either version 3 of the          *
 * License, or (at your option) any later version.                               *
 *                                                                               *
 * The TYPO3 project - inspiring people to share!                                *
 *                                                                               */
use TYPO3\Flow\Annotations as Flow;
use TYPO3\Neos\Controller\Module\AbstractModuleController;

class PhpBBController extends AbstractModuleController {

    public function indexAction() {

    }

	/**
	 * @return void
	 */
	public function installAction() {
		\TYPO3\Flow\var_dump('huhu');
	}

}
