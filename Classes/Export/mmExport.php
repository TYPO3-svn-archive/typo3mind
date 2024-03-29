<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Cyrill Schumacher <Cyrill@Schumacher.fm>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package typo3mind
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Typo3mind_Export_mmExport extends Tx_Typo3mind_Export_mmExportCommon implements Tx_Typo3mind_Export_mmExportInterface {

	/**
	 * Constructor
	 *
	 * @param array $settings
	 * @param Tx_Typo3mind_Domain_Repository_T3mindRepository $t3MindRepository
	 * @return void
	 */
	public function __construct(array $settings,Tx_Typo3mind_Domain_Repository_T3mindRepository $t3MindRepository) {
		parent::__construct($settings,$t3MindRepository);
	}

	/**
	 * main method to get the content
	 *
	 * @return void
	 */
	public function getContent() {

		$rootNode = $this->getMap();

		$mmExportLeftSide = t3lib_div::makeInstance('Tx_Typo3mind_Export_mmExportLeftSide',$this->settings,$this->t3MindRepository);
		$mmExportLeftSide->getSecurityNode($rootNode);
		$mmExportLeftSide->getTYPONode($rootNode);
		$mmExportLeftSide->getExtensionNode($rootNode); 
		$mmExportLeftSide->getDatabaseNode($rootNode);
		$mmExportLeftSide->getServerNode($rootNode); 


		$mmExportRightSide = t3lib_div::makeInstance('Tx_Typo3mind_Export_mmExportRightSide',$this->settings,$this->t3MindRepository);
		$mmExportRightSide->getSysLanguages($rootNode);
		$mmExportRightSide->getSysDomains($rootNode);
		$mmExportRightSide->sett3mind( $this->t3MindRepository->findAll() );
		$mmExportRightSide->getTree($rootNode);

		return $this->finalOutputFile($this->mapXmlRoot);

	} /* end fnc getContent */



}