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

	class qa_html_theme_layer extends qa_html_theme_base {
		
		function post_meta_who($post, $class) {
			
			if(qa_opt('q2apro_guestid_enabled') && isset($post['who'])) {
				if(isset($post['who']['data'])) {
					$qaSiteCheck = false;
					$takeOIP = false;
					// check which template is shown, different ways of detecting anonymous
					if($this->template=='qa' || $this->template=='activity') {
						// if comment then obasetype,ohandle,oip,... are used
						if(isset($post['raw']['obasetype'])) {
							$qaSiteCheck = isset($post['raw']['oip']) && !isset($post['raw']['ouserid']);
							$takeOIP = true;
						}
						else {
							// question of anonymous
							$qaSiteCheck = isset($post['raw']['createip']) && !isset($post['raw']['userid']);
						}
					}
					
					if(
						($this->template=='question' && isset($post['raw']['createip']) && is_null($post['raw']['handle'])) ||
						(($this->template=='questions' || $this->template=='unanswered') && isset($post['raw']['createip']) && !isset($post['raw']['userid'])) ||
						$qaSiteCheck
					  ){
						if($takeOIP) {
							$ip = $post['raw']['oip'];
						}
						else {
							$ip = $post['raw']['createip'];
						}
						$ipInt = str_replace('.', '', $ip); // remove dots from IP
						if(is_numeric($ipInt)) {
							// algo 1 + 2
							if(qa_opt('q2apro_guestid_idalgo')==1 || qa_opt('q2apro_guestid_idalgo')==2) {
								$alphaArr = array('a','b','c','d','e','f','g','h','i','j','k');
								$digit1 = substr($ipInt,0,1);
								$digit2 = substr($ipInt,1,1);
								$numberrest = substr($ipInt,2, (int)qa_opt('q2apro_guestid_idalgo')+1 );
								$ipID = $alphaArr[$digit1].$alphaArr[$digit2].$numberrest;
							}
							// algo 3
							else if(qa_opt('q2apro_guestid_idalgo')==3) {
								$ipID = substr($ipInt*2,0,5);
							}
							
							// replace anonymous string by guest string coming from qa_opt
							$innerAnonym = strip_tags($post['who']['data']); // get inner anonymous string of anchor
							$innerAnchor = ''; // will hold the new name for "anonymous"

							if($innerAnonym == qa_lang('main/anonymous') ) {
								$innerAnchor .= qa_opt('q2apro_guestid_anotitle').' '.$ipID;
							}
							else {
								if(qa_opt('q2apro_guestid_preservenames')) {
									// attach id to specified name
									$innerAnchor .= $innerAnonym.' '.$ipID;
								}
								else {
									// name does not get preserved, set anonymous string to specified name
									$innerAnchor .= qa_opt('q2apro_guestid_anotitle').' '.$ipID;
								}
							}
							$post['who']['data'] = str_replace($innerAnonym, $innerAnchor, $post['who']['data']); // set it to guest
						}
					}
				}
			}

			// default method call
			qa_html_theme_base::post_meta_who($post, $class);
			
		}
		
	} // end qa_html_theme_layer
	

/*
	Omit PHP closing tag to help avoid accidental output
*/