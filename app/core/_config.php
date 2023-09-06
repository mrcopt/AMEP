<?php
/**
 * @package  teenyPHP
 * @version  0.1.0
 * @todo	 Add environment specific constants for local development 
 */


/*
* App configuration file
*/

//Database configuration
define('DATABASE', array(
	'HOST'     		=> 'localhost',
	'DATABASE' 		=> 'amep',
	'USER'     		=> 'root',
	'PASSWORD' 		=> 'root',
	'DRIVER'   		=> ''
));

//Defining paths
define('ROOT', 'http://localhost:88/amep');
define('HOME_URL', ROOT . '/public');
define('ASSETS', HOME_URL . '/assets');

//App details
define('APP', array(
	'NAME' 			=> 'AMEP',
	'DESCRIPTION' 	=> 'Assets Management for Education Plaftorm',
	'VERSION' 		=> '0.1',
	'AUTHOR' 		=> 'mrco.pt',
	'GENERATOR' 	=> 'teenyPHP'
));

//Development and debugging
define('DEBUG', true);