<?php
/*
Plugin Name: wp-irpuntope
Plugin URI: http://diavolo.us/projects/wordpress/
Description: Get an alternate <a href="http://ir.pe/">Ir!</a> link for your article or post permalink.
Author: Diavolo
Version: 0.1
Author URI: http://diavolo.us/

Licence:
Provided under the GNU General Public Licence v3.0
http://www.gnu.org/licenses/gpl-3.0.txt

USAGE:
<?php wp-irpuntope() ?>

README (include detailed usage)
http://diavolo.us/wp-irpuntope/

*/

function irpuntope() {
	// get the irpuntope link and create one for the current permalink		
	$irpuntope =  file_get_contents("http://ir.pe/?url=" . get_permalink()."&api=1");

	// Print the result
	echo $irpuntope;

	}
?>