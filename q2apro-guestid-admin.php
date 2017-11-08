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

	class q2apro_guestid_admin {

		// option's value is requested but the option has not yet been set
		function option_default($option) {
			switch($option) {
				case 'q2apro_guestid_enabled':
					return 1; // true
				case 'q2apro_guestid_anotitle':
					return 1; // true
				case 'q2apro_guestid_preservenames':
					return 1; // true
				case 'q2apro_guestid_anotitle':
					return qa_lang('q2apro_guestid_lang/guest'); // guest string
				default:
					return null;				
			}
		}
			
		function allow_template($template) {
			return ($template!='admin');
		}       
			
		function admin_form(&$qa_content){                       

			// process the admin form if admin hit Save-Changes-button
			$ok = null;
			if (qa_clicked('q2apro_guestid_save')) {
				qa_opt('q2apro_guestid_enabled', (bool)qa_post_text('q2apro_guestid_enabled')); // empty or 1
				qa_opt('q2apro_guestid_idalgo', (int)qa_post_text('q2apro_guestid_idalgo')); // 1, 2 or 3
				qa_opt('q2apro_guestid_anotitle', (string)qa_post_text('q2apro_guestid_anotitle')); // string
				qa_opt('q2apro_guestid_preservenames', (bool)qa_post_text('q2apro_guestid_preservenames')); // empty or 1
				$ok = qa_lang('admin/options_saved');
			}
			
			// form fields to display frontend for admin
			$fields = array();
			
			$fields[] = array(
				'type' => 'checkbox',
				'label' => qa_lang('q2apro_guestid_lang/enable_plugin'),
				'tags' => 'NAME="q2apro_guestid_enabled"',
				'value' => qa_opt('q2apro_guestid_enabled'),
			);
			
			// field to choose algorithm
			$algoArray = array(
				'1' => '2-letters + 2 digits',
				'2' => '2-letters + 3 digits',
				'3' => '5-digits',
			);
			$fields[] = array(
				'type' => 'select',
				'label' => qa_lang('q2apro_guestid_lang/adminidalgo'),
				'tags' => 'name="q2apro_guestid_idalgo"',
				'options' => $algoArray,
				'value' => $algoArray[qa_opt('q2apro_guestid_idalgo')],
			);
			
			// preserve name, names to anonymous posts are only available from q2a v1.6
			if(version_compare(QA_VERSION, '1.6')>=0) {
				$fields[] = array(
					'type' => 'checkbox',
					'label' => qa_lang('q2apro_guestid_lang/adminpreserve'),
					'tags' => 'NAME="q2apro_guestid_preservenames"',
					'value' => qa_opt('q2apro_guestid_preservenames'),
				);
			}
			
			$fields[] = array(
				'type' => 'input',
				'label' => qa_lang('q2apro_guestid_lang/adminguest'),
				'tags' => 'NAME="q2apro_guestid_anotitle"',
				'value' => qa_opt('q2apro_guestid_anotitle'),
			);
			
			$fields[] = array(
				'type' => 'static',
				'note' => '<span style="font-size:75%;color:#789;">'.strtr( qa_lang('q2apro_guestid_lang/contact'), array( 
							'^1' => '<a target="_blank" href="http://www.q2apro.com/plugins/guest-id">',
							'^2' => '</a>'
						  )).'</span>',
			);
			
			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
				'fields' => $fields,
				'buttons' => array(
					array(
						'label' => qa_lang('main/save_button'),
						'tags' => 'name="q2apro_guestid_save"',
					),
				),
			);
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/