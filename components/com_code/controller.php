<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_code
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

/**
 * Code Component Controller
 */
class CodeController extends BaseController
{
	/**
	 * The default view.
	 *
	 * @var  string
	 */
	protected $default_view = 'trackers';

	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   array    $urlparams  An array of safe url parameters and their variable types, for valid values see JFilterInput::clean().
	 *
	 * @return  $this
	 */
	public function display($cachable = false, $urlparams = [])
	{
		$cachable  = Factory::getUser()->guest;
		$urlparams = [
			'search'     => 'STRING',
			'limit'      => 'UINT',
			'limitstart' => 'UINT',
			'tracker_id' => 'UINT',
			'issue_id'   => 'UINT',
			'lang'       => 'STRING',
			'Itemid'     => 'UINT'
		];

		return parent::display($cachable, $urlparams);
	}
}
