<?php namespace ProcessWire;

/**
 * Configure the Hello World module
 * 
 * This is an example of using an external configuration file for a module. 
 * 
 * If you want to use this rather than the getModuleConfigInputfields() method
 * in the module, do the following:
 * 
 * - Move this file into the same directroy as the ProcessHello.module.php file.
 * - Remove the getModuleConfigInputfields() method from the module file. 
 * - Remove the $this->set(...) calls in the __construct() method of the module file. 
 * 
 */

$config = [
	// Text field: greeting
	'greeting' => [
		'type' => 'text', // type of field (any Inputfield module name)
		'label' => __('Diakon Course Generator'), // field label
		'description' => __('This will create Golf Courses, 18 holes, and some generic hole locations for data input'), 
		'required' => true, 
		'value' => __('Taken from the ProcessWire Hello World Module and expanded.'), // default value
	],

	// Radio buttons: greetingType
	'greetingType' => [
		'type' => 'radios', 
		'label' => __('Greeting Type'), 
		'options' => [
			// options array of value => label
			'message' => __('Message'), 
			'warning' => __('Warning'),
			'error' => __('Error'), 
		],
		'value' => 'warning', // default value
		'optionColumns' => 1, // make options display on one line
		'notes' => __('Choose wisely'), // like description but appears under field
	]
]; 
