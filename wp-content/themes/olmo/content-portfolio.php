<?php if(!is_single()):
  $categories2 = '';
  $portfolio_category = get_the_terms( get_the_ID(), 'portfolio_category' );
  if ( $portfolio_category && ! is_wp_error( $portfolio_category ) ) : 
    $category_class = array();
    foreach ( $portfolio_category as $term1 ) {
      $category_class[] = $term1->name;
    }
    $categories2 = join( ", ", $category_class );	
  endif;
  ?>

  <div class="project-details masonry-image">

    <!-- Image -->
    <div class="project-preview rel">
      <div class="hover-overlay">
        <?php the_post_thumbnail( 'olmo-medium' ); ?> 
        <div class="item-overlay"></div>
      </div>
    </div>

    <!-- Text -->		
    <div class="project-txt">

      <!-- Text -->	
      <p class="p-md grey-color"><?php echo esc_html($categories2); ?></p>

      <!-- Link -->	
      <h5 class="h5-lg">
        <a href="<?php esc_url(the_permalink()); ?>"><?php echo get_the_title(); ?></a>
      </h5>
      
      <!-- Project Rating -->
      <div class="project-rating clearfix ico-20">
        <a href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html__('Read More ', 'olmo'); ?><i class="cs-icon cs-right-arrow"></i></a>
      </div>

    </div>	

  </div>	<!-- END PROJECT #1 -->
<?php else: ?>
  <div id="portfolio-<?php the_ID(); ?>" <?php post_class() ?>>
      <div class="single-portfolio-content">
          <?php the_content(); ?>
      </div>    
  </div>
<?php endif; ?>