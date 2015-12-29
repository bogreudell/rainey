<?php

	/*
	 * Template name: Views
	 */

	get_header();

	$header_text = get_field('header_text');
	$subheader = get_field('subheader');

?>

<div class="first-content">
  <span class="background-overlay"></span>
  <div class="content-wrapper">
    <div class="views-position">
      <h1 class="page-header"><?php echo $header_text; ?></h1>
      <p class="subheader"><?php echo $subheader; ?></p>
      <div class="content"><?php the_content(); ?></div>
      <button class='module-trigger'>Take a look</button>
    </div>
  </div>

  <!-- will need to integrate 3d software at later moment -->
</div>

<?php get_footer(); ?>