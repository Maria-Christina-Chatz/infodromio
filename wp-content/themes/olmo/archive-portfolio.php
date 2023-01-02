<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, olmo already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
		$column = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_column', '3' ) : '3';
        // Loop through the posts and do something with them.
        if ( have_posts() ) : ?>  	
			<div class="row">
				<div class="col gallery-items-list">
					<div class="masonry-wrap grid-loaded">

						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php get_template_part( 'content', 'portfolio' ); ?>
						
						<?php endwhile; ?>                
					</div>
				</div>
			</div>
			
			<?php olmo_posts_nav(); ?>
            
            <?php  
		else:
			// If no content, include the "No posts found" template.
        	get_template_part( 'content', 'none' );
        endif;
		?> 
		
<?php get_template_part( 'layout/after', '' ); ?>
    
<?php get_footer(); ?>