<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Georg Ringer <typo3@ringerge.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Add news extension to the wizard in page module
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class vibeo_vibeomedialist_wizicon {

	const KEY = 'vibeo';

	/**
	 * Processing the wizard items array
	 *
	 * @param array $wizardItems The wizard items
	 * @return array array with wizard items
	 */
	public function proc($wizardItems) {
		$wizardItems['plugins_tx_' . self::KEY . '_vibeomedialist'] = array(
			'icon'			=> t3lib_extMgm::extRelPath(self::KEY) . 'Resources/Public/Icons/vibeo.png',
			'title'			=> $GLOBALS['LANG']->sL('LLL:EXT:'.self::KEY.'/Resources/Private/Language/locallang_be.xml:vibeomedialist.title'),
			'description'	=> $GLOBALS['LANG']->sL('LLL:EXT:'.self::KEY.'/Resources/Private/Language/locallang_be.xml:vibeomedialist.description'),
			'params'		=> '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . self::KEY . '_vibeomedialist'
		);

		return $wizardItems;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/vibeo/Resources/Private/PHP/class.vibeo_vibeomedialist_wizicon.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/vibeo/Resources/Private/PHP/class.vibeo_vibeomedialist_wizicon.php']);
}

?>