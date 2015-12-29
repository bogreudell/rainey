<?php 

	$frontpage_slideshow = get_field('frontpage_slideshow');
	$mobile_slideshow = get_field('mobile_slideshow');

	get_header();

	if(!preg_match('/(symbian|smartphone|phone|iphone|android)/i', strtolower($server))) :
	    echo do_shortcode($frontpage_slideshow);
	else :
		if ( $mobile_slideshow ) :
			echo do_shortcode($mobile_slideshow);
		else :
			echo do_shortcode($frontpage_slideshow);
		endif;
	endif;

	get_footer(); 

?>