<?php namespace ProcessWire;

/**
 * ProcessHello.info.php
 * 
 * Return information about this module.
 *
 * If you prefer to keep everything in the main module file, you can move this
 * to a static getModuleInfo() method in the ProcessHello.module.php file, which
 * would return the same array as below.
 * 
 * Note that if you change any of these properties for an already installed 
 * module, you will need to do a Modules > Refresh before you see them. 
 *
 */

$info = array(

	// Your module's title
	'title' => 'Diakon Course Generator', 

	// A 1 sentence description of what your module does
	'summary' => 'DiakonTV App Course Generator - builds a tree of pages', 

	// Module version number (integer)
	'version' => 5, 

	// Name of person who created this module (change to your name)
	'author' => 'James Swallow', 

	// Icon to accompany this module (optional), uses font-awesome icon names, minus the "fa-" part
	'icon' => 'flag', 

	// Indicate any requirements as CSV string or array containing [RequiredModuleName][Operator][Version]
	'requires' => 'ProcessWire>=3.0.164', 

	// URL to more info: change to your full modules.processwire.com URL (if available), or something else if you prefer
	'href' => 'https://diakontv.app/', 

	// name of permission required of users to execute this Process (optional)
	'permission' => 'sitegen', 

	// permissions that you want automatically installed/uninstalled with this module (name => description)
	'permissions' => array(
		'sitegen' => 'Site Generator Permission'
	), 
	
	// page that you want created to execute this module
	'page' => array(
		'name' => 'CourseCreator',
		'parent' => 'setup', 
		'title' => 'DiakonTV'
	),

	// optional extra navigation that appears in admin drop down menus
	'nav' => array(
		array(
			'url' => 'new-course/',
			'label' => 'New Course',
			'icon' => 'map-o',
		),
		array(
			'url' => 'add-spider/',
			'label' => 'Add Spider Locations',
			'icon' => 'bug',
		),
		array(
			'url' => 'add-tower/',
			'label' => 'Add Tower Locations',
			'icon' => 'hospital-o',
		),
	)

	// for more options that you may specify here, see the file: /wire/core/Process.php
	// and the file: /wire/core/Module.php

);
