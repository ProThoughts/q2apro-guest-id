# Premium Plugin: Guest-ID

    "Nobody in our forum knew which post belonged to 'anonymous'. Now with this plugin, everything got so transparent. Thanks a lot!" 

	
# Description

	Gives all anonymous users that are posting in your forum a unique ID and makes it easier to identify them in a thread.


# Features

    - gives each anonymous user in your forum a unique id
    - choose from three id options: 5 digits, 2 letters + 2 digits, 2 letters + 3 digits
    - the id gets calculated from the IP address
    - the default display name for "anonymous" can be changed
    - if you have q2a v1.6 or higher: if anonymous visitor posts specifying a name, the ID gets attached after the name
    - available languages: en, fr, de


# How the algorithm works:

    - at first we convert the IP "123.45.78.22" to integer. In PHP via ip2long() from "123.45.78.22" we get "2066566678"
    - from this integer we take the first and the second digit (2 und 0)
    - both numbers are mapped to an array: array('a','b','c','d','e','f','g','h','i','j','k') - "2" becomes "c" and "0" becomes "a"
    - additionally we take the 3rd and 4th digit from the integer. From 2066566678 we get "66"
    - finally we combine all elements and get "guest ca66"
	- As you can see, it is impossible to conclude the IP from the generated ID "ca66"!


# Installation

    - Download the ZIP file provided q2apro-guest-id.zip
    - Extract the folder q2apro-guest-id from the ZIP file.
    - Move the folder q2apro-guest-id to the qa-plugin folder of your Q2A installation.
    - Use your FTP-Client to upload the folder q2apro-guest-id into the qa-plugin folder of your server.
    - Navigate to your site, go to Admin -> Plugins and check if the plugin "Guest-ID" is listed.
    - Change the options of the plugin if you like, and Save.
    - Congratulations, your new plugin has been installed.

   
# Disclaimer

	This code is in use in many q2a forums and has been tested thoroughly. However, please make a full MySQL backup of your data before installing this plugin in production environments. There could be, for instance, another plugin that interferes with this plugin. We cannot accept any claim for compensation if data is lost.


# Copyright

	Copyright © q2apro.com - All rights reserved
	Redistribution of the plugin code not permitted.
