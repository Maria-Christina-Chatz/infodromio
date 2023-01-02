<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

	<?php get_template_part( 'layout/before', '' ); ?>

		<?php
			if ( have_posts() ) :
				$i = 0;
				$count_posts = wp_count_posts();
				$count_perpage = get_option( 'posts_per_page' );
				$page = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				$before_end = $count_perpage * ($page-1);
				$total = $count_posts->publish - $before_end;
				while ( have_posts() ) : the_post();

				if ( is_sticky() && is_home() && ! is_paged() ) :
					get_template_part( 'content', 'sticky' );
				endif;

				if($i == 0):
				
				$show_text_in_blog = (function_exists('ot_get_option'))? ot_get_option( 'show_text_in_blog', 'on' ) : 'on';
				$blog_heading_text = (function_exists('ot_get_option'))? ot_get_option( 'blog_heading_text', esc_html__('Latest Articles', 'olmo') ) : esc_html__('Latest Articles', 'olmo');
				?>
				<?php if($show_text_in_blog != 'off'): ?>
					<div class="row">
						<div class="col-md-12">
							<h5 class="h5-lg posts-category"><?php echo esc_html($blog_heading_text); ?></h5>
						</div>
					</div>
				<?php endif; ?>

				<div class="row-test">	
					<div class="gallery-items-list blog-masonry">
						<div class="masonry-wrap grid-loaded">
							<?php
							endif;
														

								/*
								* Include the post format-specific template for the content. If you want to
								* use this in a child theme, then include a file called called content-___.php
								* (where ___ is the post format) and that will be used instead.
								*/
							if($i == 0):
								if(is_sticky() && is_home() && ! is_paged()):
								else:
									get_template_part( 'content', get_post_format() );
								endif;
							else:
								get_template_part( 'content', get_post_format() );
							endif;
							
						$i++;
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