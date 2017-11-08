# q2apro-guest-id
Question2Answer Plugin: Gives all anonymous users that are posting in your forum a unique ID

## Features

- gives each anonymous user in your forum a unique id
- choose from three id options: 5 digits, 2 letters + 2 digits, 2 letters + 3 digits
- the id gets calculated from the IP address*
- the default display name for "anonymous" can be changed
- if you have q2a v1.6 or higher: if anonymous visitor posts specifying a name, the ID gets attached after the name
- available languages: en, fr, de

## How the Algorithm works: 

- at first we convert the IP "123.45.78.22" to integer. In PHP via ip2long() from "123.45.78.22" we get "2066566678"
- from this integer we take the first and the second digit (2 und 0)
- both numbers are mapped to an array: array('a','b','c','d','e','f','g','h','i','j','k') - "2" becomes "c" and "0" becomes "a"
- additionally we take the 3rd and 4th digit from the integer. From 2066566678 we get "66"
- finally we combine all elements and get "guest ca66"
- As you can see, it is impossible to conclude the IP from the generated ID "ca66"

## Installation

- Download the ZIP file.
- Extract the folder q2apro-guest-id from the ZIP file.
- Move the folder q2apro-guest-id to the qa-plugin folder of your Q2A installation.
- Use your FTP-Client to upload the folder q2apro-guest-id into the qa-plugin folder of your server.
- Navigate to your site, go to Admin -> Plugins and check if the plugin "Guest-ID" is listed.
- Change the options of the plugin if you like, and Save.
- Congratulations, your new plugin has been installed.

## Disclaimer / Copyright ##

This is beta code. It is probably okay for production environments, but may not work exactly as expected. 
You bear the risk. Refunds will not be given!

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details.

All code herein is OpenSource. Feel free to build upon it and share with the world.
