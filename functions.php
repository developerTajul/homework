<?php

add_action('after_setup_theme', 'comet_theme_setup'); 

function comet_theme_setup(){

	add_theme_support('title-tag');

	add_theme_support('post-formats', array(
		'gallery',
		'video',
		'quote',
		'image',
		'audio'
	));

	add_theme_support('post-thumbnails');


	register_post_type('events', array(
		'label'		=> 'Events',
		'labels'	=> array(
			'name'		=> 'Events',
			'add_new'	=> 'Add New Event',
			'add_new_event'	=> 'Add New Event'
		),
		'public'	=> true,
		'supports'	=> array('title', 'page-attributes')
	));

}






/**
*
* comet theme css, js and conditional js files
*
*
*/

if( file_exists( dirname(__FILE__).'/inc/theme_all_files.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_files.php');

}


/**
*
* CMB2 Metabox
*
*/
require_once('libs/cmb2/custom-cmb2.php');



/**
*
*
* redux framework
*
*/
require_once('libs/redux/ReduxCore/framework.php');
require_once('libs/redux/sample/barebones-config.php');