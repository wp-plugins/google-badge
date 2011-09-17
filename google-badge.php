<?php
/*
Plugin Name: Google+ Badge
Plugin URI: http://www.gauravganoo.com
Description: A  widget that displays Google Plus Profile badge
Author: Gaurav Ganoo
Version: v0.1
Author URI: http://www.gauravganoo.com
*/


function googleBadge($id){


$url = "http://www.google.com/s2/u/0/widgets/ProfileCard?uid=$id";
	
	?>
	
	<iframe scrolling="no" frameborder="0" src="<?php echo $url; ?>" id="badge"></iframe>
	
	<?php
	
	
	
	}

?>