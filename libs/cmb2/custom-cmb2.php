<?php 


require_once('init.php');


add_action('cmb2_admin_init', 'comet_custom_metabox');

function comet_custom_metabox(){

	$post = new_cmb2_box(array(
		'id'	=> 'comet-posts',
		'title'	=> 'Extra Post Info ',
		'object_types'	=> array('post')
	));


	// video
	$post->add_field(array(
		'name'	=> 'Youtube Video Link',
		'desc'	=> 'You can add any youtube video here',
		'id'	=> 'video-link',
		'type'	=> 'oembed'
	));

	// audio
	$post->add_field(array(
		'name'	=> 'Audio Link',
		'desc'	=> 'You can add any audio here',
		'id'	=> 'audio-link',
		'type'	=> 'oembed'
	));

	// quote
	$post->add_field( array(
		'name'	=> 'Quote Text',
		'desc'	=> 'Add you quote here',
		'id'	=> 'quote-text',
		'type'	=> 'textarea'
	));

	// gallery
	$post->add_field( array(
		'name'	=> 'Gallery Images',
		'desc'	=> 'Add gallery images here',
		'id'	=> 'gallery_images',
		'type'	=> 'file_list'
	));


	/**
	*
	*
	* events
	*
	*
	*/
	$events = new_cmb2_box( array(
		'title'		=> 'Events Section',
		'id'		=> 'events-section',
		'object_types'	=> array('events')
	));



	$events-> add_field( array(
		'name'	=> 'Name of Day',
		'desc'	=> 'You can add name of Day',
		'id'	=> 'name-day',
		'type'	=> 'text'
	));

	$events-> add_field( array(
		'name'	=> 'Date No',
		'desc'	=> 'You can add date',
		'id'	=> 'name-date',
		'type'	=> 'text_date'
	));


	$group_field_id = $events->add_field( array(
		'id'          => 'wiki_test_repeat_group',
		'type'        => 'group',
		'description' => __( 'Events in details', 'cmb2' ),
		'repeatable'  => true, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => __( 'Hellow Tajul', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => false, // true to have the groups closed by default
		),
	) );


	// name
	$events->add_group_field( $group_field_id, array(
		'name' => 'Name ',
		'id'   => 'your-name',
		'type' => 'text'
	) );

	// your status
	$events->add_group_field( $group_field_id, array(
		'name' => 'Position',
		'id'   => 'your-position',
		'type' => 'text'
	) );

	// your picture
	$events->add_group_field( $group_field_id, array(
		'name' => 'Image',
		'id'   => 'your-image',
		'type' => 'file'
	) );

	// your picture left
	$events->add_group_field( $group_field_id, array(
		'name' => 'Image er Obstan',
		'id'   => 'image-position',
		'type' => 'select',
		'options'	=> array(
				'left'		 => 'Left',
				'reversitem' => 'Right'
			)

	) );

	// time of programe
	$events->add_group_field( $group_field_id, array(
		'name' => 'Time',
		'id'   => 'your-programe-time',
		'type' => 'text_time'
	) );


	// name of programe
	$events->add_group_field( $group_field_id, array(
		'name' => 'Venue',
		'id'   => 'your-venue',
		'type' => 'text'
	) );

	// programe title
	$events->add_group_field( $group_field_id, array(
		'name' => 'Programe Title',
		'id'   => 'your-programe-title',
		'type' => 'text'
	) );


	// programe description
	$events->add_group_field( $group_field_id, array(
		'name' => 'Programe Title',
		'id'   => 'your-programe-desc',
		'type' => 'wysiwyg'
	) );






}