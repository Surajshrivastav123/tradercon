<?php
require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');

class Speakers_module extends Fuel_base_controller {
	
	public $nav_selected = 'speakers|speakers/:any';

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$vars['page_title'] = $this->fuel->admin->page_title(array(lang('module_speakers')), FALSE);
		$crumbs = array('tools' => lang('section_tools'), lang('module_speakers'));

		$this->fuel->admin->set_titlebar($crumbs, 'ico_speakers');
		$this->fuel->admin->render('_admin/speakers', $vars, '', SPEAKERS_FOLDER);
	}
}
