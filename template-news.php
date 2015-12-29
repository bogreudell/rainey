<?php

	/*
	 * Template name: News
	 */

	get_header();

	// infinite post stream for now until page numbers are successfully resolved

	$post_args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
	$posts = new WP_Query( $post_args );

	if ( $posts->have_posts() ) :

?>

<div class="blog-wrap">
<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	<div class="post">
		<h2 class="subheader"><?php the_title(); ?></h2>
		<p class="post-date"><?php the_date('F j, Y'); ?></p>
		<div class="post-content">
			<?php the_content(); ?>
			<ul class="share-via">
				<li>Share via</li>
				<li class="share"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a></li>
				<li class="share"><a href="https://twitter.com/home?status=<?php echo "70 Rainey: "; the_title(); echo " "; the_permalink(); ?>" target="_blank">Twitter</a></li>
				<li class="share"><a href="mailto:?&subject=<?php echo "70 Rainey: "; the_title(); ?>&body=<?php the_permalink(); ?>">E-mail</a></li>
			</ul>
		</div>
	</div>
<?php endwhile; ?>
</div>

<?php

	// if (function_exists('wp_page_numbers') ) :
	// 	wp_page_numbers();
	// endif;

	endif;

	get_footer();

?>