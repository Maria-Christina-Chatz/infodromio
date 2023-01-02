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
<section class="section bg-snow">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-box">
                    <div class="notfound">   
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2><?php echo esc_html__('404', 'olmo'); ?></h2>
                                <h3><?php echo esc_html__('Oh no! Page Not Found', 'olmo'); ?></h3>
                                <p><?php echo esc_html__('It looks like nothing was found at this location. Please click below link or click on site logo to return home page.', 'olmo'); ?></p>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-skyblue tra-grey-hover last-link" title="<?php echo esc_attr__('Back to home', 'olmo'); ?>"><?php echo esc_html__('Back to Home', 'olmo'); ?></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end blog-box -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->           
<?php get_footer(); ?>