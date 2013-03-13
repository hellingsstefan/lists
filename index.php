<?php
	// TURN ON/OFF ERROR REPORTING:
	error_reporting( E_ALL );	
	include( 'WebLab.phar' );

	$app = new WebLab_Application( 'Application/config_local.json' );

	$app->run();
