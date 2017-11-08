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
		'enable_plugin' => 'Activer le plugin Guest-ID', // Enable Plugin (checkbox)
		'minimum_level' => 'Niveau pour accéder à cette page et à la fonction de modification des posts :', // Level to access this page and edit posts:
		'plugin_disabled' => 'Le plugin a été désactivé.', // Plugin has been disabled.
		'access_forbidden' => 'Accès interdit.', // Access forbidden.
		'plugin_page_url' => 'Ouvrir la page plugin dans le forum:', // Open page in forum:
		'contact' => 'Si vous avez des questions, visitez  ^1q2apro.com^2.', // For questions please visit ^1q2apro.com^2
		
		'adminguest' => 'Nom affiché pour l\'hôte (généralement "hôte" ou "anonyme"):',
		'adminidalgo' => 'L\'ID est composé par:',
		'adminpreserve' => 'Préserver le nom que l\'auteur anonyme spécifié (ID sera fixé)',

		// plugin
		'guest' => 'hôte',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/