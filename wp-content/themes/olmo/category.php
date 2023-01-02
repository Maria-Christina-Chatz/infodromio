<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage olmo
 * @since olmo 1.0.0
 */

get_header(); ?>

	<?php get_template_part( 'layout/before', '' ); ?>

		<?php
			if ( have_posts() ) : ?>

				<div class="row">
					<div class="col-md-12">
						<h5 class="h5-lg posts-category"><?php echo esc_html__('All Articles for Category', 'olmo'); ?></h5>
					</div>
				</div>
				<div class="row">	
					<div class="col gallery-items-list blog-masonry">
						<div class="masonry-wrap grid-loaded">
							<?php
							while ( have_posts() ) : the_post();								

								/*
								* Include the post format-specific template for the content. If you want to
								* use this in a child theme, then include a file called called content-___.php
								* (where ___ is the post format) and that will be used instead.
								*/
								get_template_part( 'content', get_post_format() );
							
							endwhile; ?>
						</div>
					</div>
				</div>
				<?php

				olmo_posts_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif; ?>       
            
	<?php get_template_part( 'layout/after', '' ); ?>
    
<?php get_footer(); ?>