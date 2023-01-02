<?php
/**
 * Template Name: Full Width Template
 * Template Post Type: post, team, service, portfolio
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in prestige consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage olmo
 * @since olmo 1.0.0
 */
?>
<?php get_header(); ?>
	<div class="fullwidth-content">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		the_content();
		    	
		wp_link_pages( array(	
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'olmo' ) . '</span>',		
			'after'       => '</div>',		
			'link_before' => '<span>',		
			'link_after'  => '</span>',		
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'olmo' ) . ' </span>%',		
			'separator'   => '<span class="screen-reader-text">, </span>',		
		) );

	// End the loop.
	endwhile;
	?>
    </div>
<?php get_footer(); ?>