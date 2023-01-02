<?php
function olmo_breadcrumbs() {
  $show_breadcrumbs = (function_exists('ot_get_option'))? ot_get_option('show_breadcrumbs', 'on') : 'on';
  if( $show_breadcrumbs == 'off' )
    return false; 
  
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '<i class="cs-icon cs-next"></i>'; // delimiter between crumbs
  $bredcrumb_menu_prefix = (function_exists('ot_get_option'))? ot_get_option('bredcrumb_menu_prefix', esc_html__('Home', 'olmo')) : esc_html__('Home', 'olmo');
  if( $bredcrumb_menu_prefix != '' ){
    $home = $bredcrumb_menu_prefix;
  } else {
  $home = esc_html__('Home', 'olmo'); // text for the 'Home' link
  }
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
 
 
  global $post, $wp_query;
  $homeLink = home_url('/');
  
  if ( is_home()) {  
    if (is_front_page()) {
		return false;
	} else{
      echo '<ul class="breadcrumb">
	  <li><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';    
       echo '<li>'.get_the_title(get_option('page_for_posts')).'</li>';    
      echo '</ul>';
	}
  
  } else {
  
    echo '<ul class="breadcrumb">
			<li><a href="' . esc_url($homeLink) . '">'.esc_html($home).'</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
		  
			if ( is_category() ) {
			  $thisCat = get_category(get_query_var('cat'), false);
			  if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ''.wp_kses($delimiter, array('i'=>array('class'=>array()))).'');
			  echo '<li class="active">'.sprintf(esc_html__('Archive by category %s', 'olmo'), single_cat_title('', false)).'</li>';
		  
			} elseif ( is_search() ) {
			  echo '<li class="active">'.sprintf(esc_html__('Search results for %s', 'olmo'),get_search_query()).'</li>';
		  
			} elseif ( is_day() ) {
			  echo '<li><a href="'.esc_url(get_year_link(get_the_time('Y'))).'">'.get_the_time('Y').'</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
			  echo '<li><a href="'.esc_url(get_month_link(get_the_time('Y'),get_the_time('m'))).'">'.get_the_time('F') .'</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li> ';
			  echo '<li class="active">'.get_the_time('d').'</li>';
		  
			} elseif ( is_month() ) {
			  echo '<li><a href="'.esc_url(get_year_link(get_the_time('Y'))).'">'.get_the_time('Y').'</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li> ';
			  echo '<li class="active">'.get_the_time('F').'</li>';
		  
			} elseif ( is_year() ) {
			  echo '<li class="active">'.get_the_time('Y').'</li>';
		  
			} elseif ( is_tax() ) {
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			  echo '<li class="active">'.wp_kses($term->name, array('a'=>array('class'=>array(), 'title'=>array(), 'href'=>array()))).''.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
			} elseif ( is_single() && !is_attachment() ) {
			  if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<li><a href="'.esc_url(get_post_type_archive_link( get_post_type()) ).'">'.esc_html($post_type->labels->singular_name).'</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
				if ($showCurrent == 1) echo '<li class="active">'.get_the_title().'</li>';
			  } else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, ''.wp_kses($delimiter, array('i'=>array('class'=>array()))) . '');
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
				echo '<li>'.wp_kses($cats, array('a'=>array('class'=>array(), 'title'=>array(), 'href'=>array()))).'' . wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
				if ($showCurrent == 1) echo '<li class="active">'.get_the_title().'</li>';
			  }
		  
			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			  $post_type = get_post_type_object(get_post_type());
			  if($post_type){
			  echo '<li class="active">'.esc_html($post_type->labels->singular_name).'</li>';
			  }
		  
			} elseif ( is_attachment() ) {
			  $parent = get_post($post->post_parent);
			  echo '<li><a href="' . esc_url(get_permalink($parent)) . '">'.esc_html($parent->post_title).'</a>' . wp_kses($delimiter, array('i'=>array('class'=>array()))) . '</li>';
			  if ($showCurrent == 1) echo ''.'<li class="active">'.get_the_title().'</li>';
		  
			} elseif ( is_page() && !$post->post_parent ) {
			  if ($showCurrent == 1) echo '<li class="active">'.get_the_title().'</li>';
		  
			} elseif ( is_page() && $post->post_parent ) {
			  $parent_id  = $post->post_parent;
			  $breadcrumbs = array();
			  while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<li><a href="' . esc_url(get_permalink($page->ID)) . '">'.get_the_title($page->ID) . '</a>'.wp_kses($delimiter, array('i'=>array('class'=>array()))).'</li>';
				$parent_id  = $page->post_parent;
			  }
			  $breadcrumbs = array_reverse($breadcrumbs);
			  for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo wp_kses($breadcrumbs[$i], array('li'=>array('class'=>array()), 'a'=>array('class'=>array(), 'href'=>array(), 'title'=>array()), 'i'=>array('class'=>array())) );
			  }
			  if ($showCurrent == 1) echo ''.'<li class="active">'.get_the_title().'</li>';
		  
			} elseif ( is_tag() ) {
			  echo '<li class="active">'.sprintf(esc_html__('Posts tagged %s', 'olmo'), single_tag_title('', false)).'"'.'</li>';
		  
			} elseif ( is_author() ) {
			   global $author;
			  $userdata = get_userdata($author);
			  echo '<li class="active">'.sprintf(esc_html__('Articles posted by %s', 'olmo'), esc_html($userdata->display_name)).'</li>';
		  
			} elseif ( is_404() ) {
			  echo '<li class="active">'.esc_html__('Error 404', 'olmo').'</li>';
			}
		  
			if ( get_query_var('paged') ) {
			  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '<li>';
			  echo esc_html__(' (Page', 'olmo') . ' ' . get_query_var('paged'). ')';
			  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '</li>';
			}    
	  
		echo '
		</ul>';
  
  }
} // end olmo_breadcrumbs()