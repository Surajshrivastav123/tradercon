<?php
require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');

class Events_module extends Fuel_base_controller {
	
	public $nav_selected = 'events|events/:any';

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$vars['page_title'] = $this->fuel->admin->page_title(array(lang('module_events')), FALSE);
		$crumbs = array('tools' => lang('section_tools'), lang('module_events'));

		$this->fuel->admin->set_titlebar($crumbs, 'ico_events');
		$this->fuel->admin->render('_admin/events', $vars, '', EVENTS_FOLDER);
	}
}