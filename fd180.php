<?php

/*

Plugin Name: FireFox Detective
Version: 1.0.2-180
Plugin URI: http://blogtalk.isgreat.org/
Description: Adds FireFox Download Button to WordPress for IE users .
Usage:  By choosing the options under the options menu

Author: Trex Ramvort (modified for The XChange)
Author URI: http://xchange.jaywebdesigns.com/xchange
*/
$browser = $_SERVER['HTTP_USER_AGENT'];
$firefox="";


if(preg_match("/firefox/i", $browser)) { echo $firefox ;
	//Do Nothing
} else {
	echo
		// Google Refferal Area
		// IMPORTANT If you use Google Refferals change the following scripts to your prefferance
		$text="
		<div style='text-align: left'>

		<script type=\"text/javascript\"><!--
		google_ad_client = \"pub-7341502299035420\";
		google_ad_width = 180;
		google_ad_height = 60;
		google_ad_format = \"180x60_as_rimg\"
		google_cpa_choice = \"CAEQ56j8zwEaCDUq0yykEJ65KMu293M\"
		google_ad_channel = \"\";
		//-->
		</script>
		<script type=\"text/javascript\" src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
		</script>



</div>
";

	
  }




?>
