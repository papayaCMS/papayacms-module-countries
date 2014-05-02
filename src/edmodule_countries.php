<?php
/**
* Country modification module
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage _Base-Community-Countries
* @version $Id: edmodule_countries.php 39600 2014-03-18 11:43:38Z weinert $
*/

/**
* Country modification module
*
* Country administration
*
* @package Papaya-Modules
* @subpackage _Base-Countries
*/
class edmodule_countries extends base_module {
  /**
  * Permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Manage',
    2 => 'Reset list',
  );

  /**
  * Execute module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $countries = new country_admin();
      $countries->module = $this;
      $countries->layout = $this->layout;
      $countries->initialize();
      $countries->execute();
      $countries->get($this->layout);
      $countries->getButtons();
    }
  }
}

