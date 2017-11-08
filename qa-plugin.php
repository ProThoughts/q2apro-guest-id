<?php

/*
	Plugin Name: Guest ID
	Plugin URI: http://www.q2apro.com/plugins/guest-id
	Plugin Description: Gives all anonymous users that are posting in your forum a unique ID
	Plugin Version: 1.0
	Plugin Date: 2014-02-27
	Plugin Author: q2apro.com
	Plugin Author URI: http://www.q2apro.com
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: http://www.q2apro.com/pluginupdate?id=59
	
	Licence: Copyright © q2apro.com - All rights reserved

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	// language file
	qa_register_plugin_phrases('q2apro-guestid-lang-*.php', 'q2apro_guestid_lang');

	// layer
	qa_register_plugin_layer('q2apro-guestid-layer.php', 'Guest-ID Layer');

	// admin
	qa_register_plugin_module('module', 'q2apro-guestid-admin.php', 'q2apro_guestid_admin', 'Guest-ID Admin');
        

/*
	Omit PHP closing tag to help avoid accidental output
*/