<?php
require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');

class Sponsors_module extends Fuel_base_controller {
	
	public $nav_selected = 'sponsors|sponsors/:any';

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$vars['page_title'] = $this->fuel->admin->page_title(array(lang('module_sponsors')), FALSE);
		$crumbs = array('tools' => lang('section_tools'), lang('module_sponsors'));

		$this->fuel->admin->set_titlebar($crumbs, 'ico_sponsors');
		$this->fuel->admin->render('_admin/sponsors', $vars, '', SPONSORS_FOLDER);
	}
}