<?php

	/*
	 * Template name: Residences
	 */

	get_header();

	$subheader = get_field('subheader');
	$intro_content = get_field('intro_content');

?>

<div class="first-content">
  <?php if(!preg_match('/(symbian|smartphone|phone|iphone|android)/i', strtolower($server))) : ?>
  <button class="inquiries module-trigger">Inquiries</button>
  <?php endif; ?>
  <h1 class="content-title"><?php the_title(); ?></h1>
  <img class="break" src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/blue-square.svg" height="15px" alt="">
  <div class="content-wrapper">
    <h2 class="subheader"><?php echo $subheader; ?></h2>
    <div id="residences-intro" class="copy-text"><?php echo $intro_content; ?></div>
    <?php if(preg_match('/(symbian|smartphone|phone|iphone|android)/i', strtolower($server))) : ?>
    <button class="inquiries module-trigger">Inquiries</button>
    <?php endif; ?>
    <button id="floor-plans" class="module-trigger">Floor plans</button>
    <button id="interior-specs" class="module-trigger">Interior specs</button>
    <?php if(preg_match('/(symbian|smartphone|phone|iphone|android)/i', strtolower($server))) : ?>
    <div class="clear"></div>
    <?php endif; ?>
  </div>
  <span class="scroll-down-wrapper">
    <a class="scroll-down" href="#banner">
      <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/arrow-green.svg" width="30px" alt="">
    </a>
  </span>
</div>

<?php get_template_part('includes/content', 'block'); ?>

<div class="body-content">
  <button class="inquiries module-trigger block-button"><span><span class="line"></span>Inquiries</span></button>
</div>

<?php get_footer(); ?>

