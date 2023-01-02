<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage olmo
 * @since olmo 1.0.0
 */
 
?>
<?php $description = get_the_author_meta( 'description' ); ?>
<?php if($description != ''): ?>
    <div class="stretch-content mb-80">
    <div class="about-post-author">
        <div class="container">	
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="author-senoff">
                        
                        <!-- Avatar -->
                        <?php		
                        $author_bio_avatar_size = apply_filters( 'olmo_author_bio_avatar_size', 150 );
                        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, null, null, array( 'class' => array( 'img-responsive' ) ) );
                        ?>

                        <!-- Text -->
                        <div class="author-senoff-txt">

                            <!-- Title -->
                            <h5 class="h5-xs"><?php echo esc_html__('Published by ', 'olmo'); ?></h5>
                            <h5 class="h5-md"><?php echo get_the_author(); ?></h5>
                            <p class="p-md"><?php the_author_meta( 'description' ); ?></p>

                            <!-- Link -->
                            <p class="author-link"><?php echo esc_html__('All stories by ', 'olmo'); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a></p>

                            <!-- Follow Button -->
                            <?php if(get_the_author_meta('twitter') != ''): ?>
                                <div class="author-follow-btn"><a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>"><?php echo esc_html__('Follow', 'olmo'); ?></a></div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>  <!-- End row -->
        </div>  <!-- End container -->
    </div>	<!-- END ABOUT POST AUTHOR -->
    </div>
<!-- end details -->
<?php endif; ?>