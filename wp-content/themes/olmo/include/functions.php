<?php
require OLMOTHEMEDIR . '/include/custom-menu/custom-menu.php';
require OLMOTHEMEDIR . '/include/breadcrumbs.php';
require OLMOTHEMEDIR . '/include/woo-functions.php';

function olmo_excerpt_more( $more ) {
		return '<div class="read-more-wrapper"><a class="more-link read-more-link" href="' . esc_url(get_permalink( get_the_ID() ) ) . '">' . esc_html__('Read More', 'olmo' ) . '</a></div>';
} // end tradingblock_excerpt_more function

function olmo_more_link($more) {
    return '<div class="read-more-wrapper">'. wp_kses($more, array('a'=>array('href'=>array(), 'class'=>array()), 'i'=>array('class'=>array()))).'</div>';
}
add_filter('the_content_more_link','olmo_more_link');

add_filter( 'excerpt_more', 'olmo_excerpt_more' );

function olmo_excerpt_length( $length ) {
	$length = (function_exists('ot_get_option'))? ot_get_option("excerpt_length", 20) : 20;
	if( $length!= ''){
		return $length;
	} else{
		return 20;
	}	
} // end olmo_excerpt_length function

add_filter( 'excerpt_length', 'olmo_excerpt_length', 999 );

function olmo_body_class( $classes ) {
	
	$classes[] = (function_exists('ot_get_option'))? ot_get_option( 'background_layout', 'wide' ) : 'wide';
	
	if(is_page()){
		$layout = get_post_meta( get_the_ID(), 'page_layout', true );
		if($layout != ''){
			$layout = $layout;
		} else {
			$layout = 'rs';
		}
	}
	elseif(is_single()){
		$layout = 'full';
	}
	else{
		$layout = (function_exists('ot_get_option'))? ot_get_option( 'blog_layout', 'rs' ) : 'rs';
	}
	
	$classes[] = 'layout-'.$layout;

	return $classes;
}
add_filter( 'body_class', 'olmo_body_class' );

 if ( ! function_exists( 'olmo_comments' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own olmo_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function olmo_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php esc_html_e( 'Pingback:', 'olmo' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( 'Edit', 'olmo' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    	<div class="comment">            
            <div class="media">            	
                <a href="<?php echo esc_url(get_comment_author_link()); ?>" class="pull-left"><?php echo get_avatar( $comment, 100 ); ?></a>
                <div class="media-body">
                	<h4 class="media-heading"><?php comment_author(); ?> <span><?php echo human_time_diff( get_comment_time( 'U' ), current_time('timestamp') ) . esc_html__(' ago', 'olmo'); ?></span></h4>
                    <span class="position-edit-links">
					<?php					
                    edit_comment_link( esc_html__( 'Edit', 'olmo' ), '<span class="edit-link">', '</span>' );
                    comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'olmo' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
                    ?>
                    </span>                   
                    <p><?php comment_text(); ?></p>                   
                    <?php if ( '0' == $comment->comment_approved ) : ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'olmo' ); ?></p>
                    <?php endif; ?> 
                </div>
             </div>
         </div>							
	<?php
		break;
	endswitch; // end comment_type check
} // end olmo_comments function
endif;

function olmo_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'olmo_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'olmo_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so olmo_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so olmo_categorized_blog should return false.
		return false;
	}
} // end olmo_categorized_blog function

if ( ! function_exists( 'olmo_category_transient_flusher' ) ) :
function olmo_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'olmo_categories' );
} // end olmo_category_transient_flusher function
endif;

add_action( 'edit_category', 'olmo_category_transient_flusher' );
add_action( 'save_post',     'olmo_category_transient_flusher' );

if ( ! function_exists( 'olmo_fonts_url' ) ) :
function olmo_fonts_url() {
	$fonts_url = '';
	$fonts     = array();

	/* translators: If there are characters in your language that are not supported
	 * by Open Sans, translate this to 'off'. Do not translate into your own language.
	 */

	if ( 'off' !== _x( 'on', 'Rubik font: on or off', 'olmo' ) ) {
		$fonts[] = 'Rubik:wght@300;400;500;700';
	}
	
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => implode( '&family=', $fonts )
		), '//fonts.googleapis.com/css2' );
	}

	return $fonts_url;
} // end olmo_fonts_url function
endif;

if ( ! function_exists( 'olmo_mce_css' ) ) :
function olmo_mce_css( $mce_css ) {
	$fonts_url = olmo_fonts_url();

	if ( empty( $fonts_url ) )
		return $mce_css;

	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $fonts_url ) );

	return $mce_css;
} // end olmo_mce_css function
endif;

add_filter( 'mce_css', 'olmo_mce_css' );

function olmo_gutenberg_fonts() {
	$fonts_url = '';
	$fonts     = array();
	
	if ( 'off' !== _x( 'on', 'Rubik font: on or off', 'olmo' ) ) {
		$fonts[] = 'Rubik:wght@300;400;500;700';
	}
	
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => implode( '&family=', $fonts )
		), '//fonts.googleapis.com/css2' );
	}
	
    wp_enqueue_style('olmo-google-fonts', $fonts_url , array(), false );
}
add_action('enqueue_block_editor_assets', 'olmo_gutenberg_fonts');

if ( ! function_exists( 'olmo_fix_gallery' ) ) :
function olmo_fix_gallery($output, $attr) {
    global $post;

    static $instance = 0;
    $instance++;
    $size_class = '';

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'div',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => '',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $selector = "gallery-{$instance}";

    $gallery_style = $gallery_div = '';
    if ( apply_filters( 'use_default_gallery_style', true ) )
        /**
         * this is the css you want to remove
         *  #1 in question
         */
        /*
        */
    $size_class = ($size != '' )?sanitize_html_class( $size ) : 'normal';
    $gallery_div = '<div class="gallery-carousel owl-carousel" data-items="1" data-nav="true" data-dots="false" data-margin="0" data-autoplay="true">';
    $output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$width = round(1250/$columns);
	$height = round(1250/$columns);
	
	$col_class = intval(12/$columns);
	
	foreach ( $attachments as $id => $attachment ) {

        $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
		 $image_url = wp_get_attachment_url($id, $size, false, false);
		 $attatchement_image = olmo_image_resize( $image_url, $width, $height, true, false, false );
        
		$output .= '<div class="item"><img src="' . esc_url($image_url) . '" alt="'.esc_attr__('images thumbnail', 'olmo').'" /></div>';
    }
    $output .= '</div>';
    return $output;
} // end olmo_fix_gallery function
endif;

add_filter("post_gallery", "olmo_fix_gallery",10,2);


if ( ! function_exists( 'olmo_posts_nav' ) ) :
function olmo_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 ) {

	} else {
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="clearfix"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( '<i class="cs-icon cs-back"></i>' ) );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? 'list-nav current' : 'list-nav';

		printf( '<li class="%s"><a href="%s">%s</a></li>' . "\n", esc_attr($class), esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>&hellip;</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? 'list-nav current' : 'list-nav';
		printf( '<li class="%s"><a href="%s">%s</a></li>' . "\n", esc_attr($class), esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>&hellip;</li>' . "\n";

		$class = $paged == $max ? 'list-nav current' : 'list-nav';
		printf( '<li class="%s"><a href="%s">%s</a></li>' . "\n", esc_attr($class), esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link( '<i class="cs-icon cs-next"></i>' ) );

	echo '</ul></nav>' . "\n";

} // end olmo_posts_nav function
}
endif;

function olmo_next_prev_posts() {
	$prev_post = get_previous_post();
	$next_post = get_next_post();
	if (!empty( $prev_post )){
		$title = $prev_post->post_title;
		if($title != ''){
			$title = $prev_post->post_title;
		} else {
			$title = get_the_date( '', $prev_post->ID );
		}
	}
	
	if (!empty( $next_post )){
		$title2 = $next_post->post_title;
		if($title2 != ''){
			$title2 = $next_post->post_title;
		} else {
			$title2 = get_the_date( '', $next_post->ID );
		}
	}
	
	if (!empty( $next_post ) || !empty( $prev_post )):
	?>
    <div class="blog-item-next-prev">
        <div class="row no-gutters">
            <div class="col-6">
				<?php
				if (!empty( $prev_post )){?>					
					<div class="absolute-pager">
						<a class="text-left-previous" href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><i class="cs-icon cs-left-arrow"></i><?php echo esc_html__('Previous Post', 'olmo'); ?></a>
						<div class="bottom-thumb">
							<a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>" class="d-flex align-items-center">
								<?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?>
								<span><?php echo esc_html($title); ?></span>
							</a>
						</div>
					</div><!-- end left -->
				<?php } ?>
            </div><!-- end col -->
            <div class="col-6">
				<?php
				if (!empty( $next_post )){?>						
					<div class="absolute-pager text-right">
						<a class="text-right-next" href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><?php echo esc_html__('Next Post', 'olmo'); ?><i class="cs-icon cs-right-arrow-1"></i></a>
						<div class="bottom-thumb">
							<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>" class="d-flex align-items-center justify-content-end">
								<?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); ?>
								<span><?php echo esc_html($title2); ?></span>
							</a>
						</div>
					</div><!-- end left -->
				<?php } ?>				
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
    <?php
	endif;
}

//related posts shows in single post
function olmo_related_posts() {
	global $post;
	
	$terms =  array();
    $postid = get_the_ID();
	$terms = wp_get_post_terms( $postid, 'post_tag' , array('fields' => 'slugs') );
	
	$show_related_post = (function_exists('ot_get_option'))? ot_get_option( 'show_related_post', 'on' ) : 'on';
	$blog_content_show = (function_exists('ot_get_option'))? ot_get_option( 'blog_content_show', 'on' ) : 'on';
	
	if( !empty($terms) && ( $show_related_post == 'on') ):
	$total_related_post_show = (function_exists('ot_get_option'))? ot_get_option( 'total_related_post_show', 3 ) : 3;
	
	$blog_comment_show = (function_exists('ot_get_option'))? ot_get_option( 'blog_comment_show', 'on' ) : 'on';

	$sticky = get_option( 'sticky_posts' );
	$sticky[] = $postid;	
	
	$args = array(
	'post__not_in' => $sticky,
	'posts_per_page' => $total_related_post_show,
	'tax_query' => array(
		array(
			'taxonomy' => 'post_tag',
			'field' => 'slug',
			'terms' => $terms
		))
	);
	$query = new WP_Query( $args );

    if ( $query->have_posts() ): ?>
		<div id="blog-1" class="related-blog bg-whitesmoke-gradient wide-60 blog-section division stretch-content">				
			<div class="container">

				<!-- SECTION TITLE -->	
				<div class="row justify-content-center">	
					<div class="col-lg-10 col-xl-8">
						<div class="section-title title-01 mb-70">		
							<h2 class="h2-md"><?php echo esc_html__('Keep Reading...', 'olmo'); ?></h2>	
						</div>	
					</div>
				</div>

				<!-- BLOG POSTS -->
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-5">

				<?php while ( $query->have_posts() ) :$query->the_post();
				$class_thumb = ' no-thumb';
				?>
					<!-- BLOG POST #1 -->
					<div class="col">
						<div class="blog-1-post mb-60 wow fadeInUp">

							<!-- BLOG POST IMAGE -->
							<?php if(has_post_thumbnail()):
								$class_thumb = ' with-thumb';
								?>
								<div class="blog-post-img">
									<div class="hover-overlay">
										<?php the_post_thumbnail( 'olmo-medium' ); ?>
										<div class="item-overlay"></div>
									</div>
								</div>
							<?php endif; ?>

							<!-- BLOG POST TEXT -->
							<div class="blog-post-txt<?php echo esc_attr($class_thumb); ?>">
								<!-- Post Tag -->
								<p class="p-md  post-tag d-flex justify-content-between">
									<?php if(!empty(get_the_category())):?>
										<span><i class="cs-icon cs-folder"></i><?php the_category(', '); ?></span>
									<?php endif; ?>
									<a href="<?php esc_url(the_permalink()); ?>" class="date-meta"><i class="cs-icon cs-calendar-1"></i><?php echo get_the_date(); ?></a>
								</p>

								<!-- Post Link -->
								<?php the_title('<h5 class="h5-md"><a href="'.esc_url(get_the_permalink()).'">', '</a></h5>'); ?>

								<!-- Text -->
								<?php if($blog_content_show == 'on'): ?>
									<p class="p-lg"><?php echo wp_trim_words(get_the_content(), 10, ''); ?></p>
								<?php endif; ?>

								<!-- Post Meta -->
								<div class="post-meta">
									<p class="p-md d-flex justify-content-between align-items-center">
										<?php if($blog_comment_show == 'on'): ?>
											<a href="<?php esc_url(comments_link()); ?>"><i class="cs-icon cs-chat-1"></i>
												<?php comments_number( esc_html__('0 Comments', 'olmo'), esc_html__('1 Comment', 'olmo'), esc_html__('% Comments', 'olmo') ) ?> 
											</a>
										<?php endif; ?>
										<?php if($blog_content_show == 'on'): ?>
											<a class="more-link read-more-link" href="<?php echo esc_url( get_permalink() ); ?>">
												<i class="cs-icon cs-right-arrow-1"></i><?php echo esc_html__('Read More', 'olmo'); ?>
											</a>
										<?php endif; ?>
									</p>
								</div>
							</div>	<!-- END BLOG POST TEXT -->
						</div>
					</div>	<!-- END  BLOG POST #1 -->
				<?php endwhile; ?>
				</div>	<!-- END BLOG POSTS -->
			</div>	   <!-- End container -->		
		</div>	<!-- END BLOG-1 -->
    <?php
	endif;
	wp_reset_postdata();
	endif;
}

//related portfolios shows in single portfolio
function olmo_related_portfolios() {
	global $post;
	
	$terms =  array();
    $postid = get_the_ID();
	$terms = wp_get_post_terms( $postid, 'portfolio_tag' , array('fields' => 'slugs') );
	
	$show_related_post = (function_exists('ot_get_option'))? ot_get_option( 'show_related_portfolio', 'on' ) : 'on';
	
	if( !empty($terms) && ( $show_related_post == 'on') ):
	$total_related_post_show = (function_exists('ot_get_option'))? ot_get_option( 'total_related_portfolio_show', 3 ) : 3;	
	$sticky = get_option( 'sticky_posts' );
	$sticky[] = $postid;	
	
	$args = array(
	'post__not_in' => $sticky,
	'posts_per_page' => $total_related_post_show,
	'tax_query' => array(
		array(
			'taxonomy' => 'portfolio_tag',
			'field' => 'slug',
			'terms' => $terms
		))
	);
	$query = new WP_Query( $args ); ?>
    <?php if ( $query->have_posts() ): ?>
    <div class="related-portfolios">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
				<div class="heading-content text-center border-show">			
					<span class="sub-title"><?php echo esc_html__('Portfolio', 'olmo'); ?></span>
					<h2><?php echo esc_html__('Project We Have Done Since Recent Month', 'olmo'); ?></h2>
				</div>
			</div>
		</div>				        	
        <div class="row">
            <?php while ( $query->have_posts() ) :$query->the_post(); ?>
			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
			<div class="col-lg-4 col-md-6">
				<div class="portfolio-single-content">							
					<div class="portfolio-media">
						<a href="<?php esc_url(the_permalink()); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?></a>
						<div class="overlay-portfolio elementor-image">
							<a href="<?php echo esc_url($featured_img_url); ?>" data-elementor-open-lightbox="yes"><i class="fal fa-plus"></i></a>
						</div>
					</div>
					<div class="portfolio-des">
						<h3 class="portfolio-title">
							<a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
						</h3>
						<?php $portfolio_category = get_the_terms( get_the_ID(), 'portfolio_category' );
						if ( $portfolio_category && ! is_wp_error( $portfolio_category ) ) : ?>
						<ul class="portfolio-cat-desc">
							<?php foreach ( $portfolio_category as $term1 ) { ?>
								<li><a href="<?php echo esc_url( get_term_link( $term1->term_id ) ) ?>"><?php echo esc_html($term1->name); ?></a></li>
							<?php }	?>
						</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
            <?php endwhile; ?>				
        </div><!-- end row -->			
    </div><!-- end postpager -->
    <?php
	endif;
	wp_reset_postdata();
	endif;
}

// one page menu select
function olmo_menu_select(){	
	$result = array();
	$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) ); 

	foreach ( $menus as $value ) {	
		$array1 = array('value' => $value->name, 'label' => $value->name);		
		$result[] = $array1;
	}
    return $result;
}

function olmo_insert_attachment($file_handler,$post_id,$setthumb='false') {
	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK){ return __return_false();
	}

	$attach_id = media_handle_upload( $file_handler, $post_id );
	//set post thumbnail if setthumb is 1
	if ($setthumb == 1){
		update_post_meta($post_id,'_thumbnail_id',$attach_id);
	}
	return $attach_id;
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function olmo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'olmo_pingback_header' );

//google analytics code
function olmo_google_analytics() {
	$google_analytics = (function_exists('ot_get_option'))? ot_get_option('google_analytics_code', '') : '';
	if($google_analytics != ''){
		echo do_shortcode($google_analytics);
	}
}

add_action('wp_head', 'olmo_google_analytics', 1);