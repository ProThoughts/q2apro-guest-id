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

	return array(
		// default
		'enable_plugin' => 'Guest-ID Plugin aktivieren', // Enable Plugin (checkbox)
		'minimum_level' => 'Auf Seite zugreifen und Posts bearbeiten können:', // Level to access this page and edit posts:
		'plugin_disabled' => 'Dieses Plugin wurde deaktiviert.', // Plugin has been disabled.
		'access_forbidden' => 'Zugriff nicht erlaubt.', // Access forbidden.
		'plugin_page_url' => 'Seite im Forum öffnen:', // Open page in forum:
		'contact' => 'Bei Fragen bitte ^1q2apro.com^2 besuchen.', // For questions please visit ^1q2apro.com^2
		
		'adminguest' => 'Anzuzeigender Name für den anonymen Besucher (üblicherweise "Gast" oder "Anonym"):',
		'adminidalgo' => 'Die ID wird gebildet aus:',
		'adminpreserve' => 'Zeige den Namen an, den der anonyme Poster angegeben hat (ID wird angehangen)',
		
		// plugin
		'guest' => 'Gast',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/