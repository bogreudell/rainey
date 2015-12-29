<?php
	$banner = get_field( 'banner_image' );
	$text_overlay = get_field( 'text_overlay' );
?>

<div id="banner" class="banner-img" style="background:url('<?php echo $banner; ?>') center center no-repeat; background-size:cover;">
  <h1 class="content-title"><?php echo $text_overlay; ?></h1>
  <span class="scroll-down-wrapper">
    <a class="scroll-down" href="#body-content">
      <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/arrow-cream.svg" width="30px" alt="">
    </a>
  </span>
</div>

<div id="body-content" class="body-content">
	<?php the_content(); ?>
</div>