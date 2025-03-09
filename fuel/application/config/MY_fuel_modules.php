<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** /EXAMPLE ***********************************/



/*********************** OVERWRITES ************************************/

$config['module_overwrites']['categories']['hidden'] = TRUE; // change to FALSE if you want to use the generic categories module
$config['module_overwrites']['tags']['hidden'] = TRUE; // change to FALSE if you want to use the generic tags module
 
/*********************** /OVERWRITES ************************************/
$config['modules']['BlogCatagory'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'hidden'=>false
);
$config['modules']['Blogs'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'hidden'=>false
);


$config['modules']['speakers_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'speakers', // put in the advanced module name here
	'hidden'=>TRUE
);

$config['modules']['sponsors_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'sponsors', // put in the advanced module name here
	'hidden'=>TRUE
);
$config['modules']['category_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'sponsors', // put in the advanced module name here
	'hidden'=>TRUE
);

$config['modules']['events_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);

$config['modules']['event_sponsors'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);

$config['modules']['event_speakers'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);
$config['modules']['event_images'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);
$config['modules']['event_videos'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);
$config['modules']['event_pricing_plans'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
	'hidden'=>TRUE
);




$config['modules']['venue_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['agenda_master'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);
$config['modules']['event_registration'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => 'events', // put in the advanced module name here
);

$config['modules']['banners'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);
$config['modules']['advisors'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);