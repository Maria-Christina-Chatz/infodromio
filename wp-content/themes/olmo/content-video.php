<?php
$blog_layout = (function_exists('ot_get_option'))? ot_get_option( 'blog_layout', 'rs' ) : 'rs';
$show_social_sharing_icons = (function_exists('ot_get_option'))? ot_get_option( 'show_social_sharing_icons', 'off' ) : 'off';
$blog_content_show = (function_exists('ot_get_option'))? ot_get_option( 'blog_content_show', 'on' ) : 'on';
$class_thumb = ' no-thumb';
$show_next_previous_single = (function_exists('ot_get_option'))? ot_get_option( 'show_next_previous_single', 'on' ) : 'on';
$blog_comment_show = (function_exists('ot_get_option'))? ot_get_option( 'blog_comment_show', 'on' ) : 'on';
?>

<!-- BLOG POST #1 -->
<?php if(!is_single()): ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('blog-3-post masonry-image') ?>>

        <!-- BLOG POST IMAGE -->
        <?php
        $video_url = get_post_meta( get_the_ID(), 'video_link', true );
        if(has_post_thumbnail() || $video_url != ''):
            $class_thumb = ' with-thumb';
        ?>
            <div class="blog-post-img">
                <?php if( $video_url != '' ): ?>
                    <a href="<?php echo esc_url($video_url); ?>" data-url="<?php echo esc_url($video_url); ?>" class="video-popup"><i class="fas fa-play"></i></a>
                <?php endif; ?>
                <div class="hover-overlay">
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <?php the_post_thumbnail( 'olmo-medium' ); ?>
                    </a>
                    <div class="item-overlay"></div>
                </div>
            </div>
        <?php endif; ?>

        <!-- BLOG POST TEXT -->
        <div class="blog-post-txt<?php echo esc_attr($class_thumb); ?>">
            <!-- Post Tag -->
            <p class="p-md post-tag d-flex justify-content-between">
                <?php if(!empty(get_the_category())):?>
                    <span><i class="cs-icon cs-folder"></i><?php the_category(', '); ?></span>
                <?php endif; ?>
                <a href="<?php esc_url(the_permalink()); ?>" class="date-meta"><i class="cs-icon cs-calendar-1"></i><?php echo get_the_date(); ?></a>
            </p>	

            <!-- Post Link -->
            <?php the_title('<h5 class="h5-md"><a href="'.esc_url(get_the_permalink()).'">', '</a></h5>'); ?>

            <?php if($blog_content_show == 'on'): ?>
                <p class="p-lg"><?php echo wp_trim_words(get_the_content(), 16, ''); ?></p>
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
    </div>	<!-- END BLOG POST #1 -->
<?php else: ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('single-post-wrapper') ?>>
        <div class="single-post-title">

            <!-- CATEGORY -->
            <?php if(!empty(get_the_category())):?>
                <p class="p-sm post-tag txt-500 txt-upcase"><?php the_category(', '); ?></p>
            <?php endif; ?>

            <!-- TITLE -->
            <?php the_title('<h2 class="h2-md">', '</h2>'); ?>

            <!-- POST DATA -->
            <div class="post-data clearfix">
            
                <!-- Author Avatar -->
                <div class="post-author-avatar">
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                    </a>
                </div>

                <!-- Author Data -->
                <div class="post-author">
                    <h6 class="h6-xl"><?php echo get_the_author(); ?></h6>	
                    <p class="p-md"><?php echo esc_html__('Posted on ', 'olmo'); ?>
                        <a href="<?php esc_url(the_permalink()); ?>"><?php echo get_the_date(); ?></a> 
                        <?php if($blog_comment_show == 'on'): ?>
                        - <a href="<?php esc_url(comments_link()); ?>">
                            <?php comments_number( esc_html__('0 Comments', 'olmo'), esc_html__('1 Comment', 'olmo'), esc_html__('% Comments', 'olmo') ) ?>
                        </a>
                        <?php endif; ?>
                    </p>	
                </div>
            </div>	<!-- END POST DATA -->
        </div>	<!-- END SINGLE POST TITLE -->

        <div class="single-post-txt">
            <?php if ( is_search()) : ?>                
                <?php the_excerpt(); ?>                        
            <?php else : ?>                    
                <?php
                $read_more_class = esc_html__( 'Read More', 'olmo' ).'<i class="fal fa-plus"></i>';
                the_content($read_more_class); ?>                       
            <?php endif; ?>

            <?php
                wp_link_pages( array(				
                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'olmo' ) . '</span>',					
                    'after'       => '</div>',					
                    'link_before' => '<span>',					
                    'link_after'  => '</span>',					
                    'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'olmo' ) . ' </span>%',					
                    'separator'   => '<span class="screen-reader-text">, </span>',					
                ) );

                if(function_exists('olmo_social_share') && $show_social_sharing_icons == 'on'):
                    $col_social_class = 'col-md-9 col-xl-8';
                else:
                    $col_social_class = 'col-md-12 col-xl-12';
                endif;                                
            ?>
        </div>

        <div class="row post-share-links d-flex align-items-center">
            <!-- POST TAGS -->
            <div class="<?php echo esc_attr($col_social_class); ?> post-tags-list">
                <?php
                $tags_list = get_the_tag_list('<span>','</span><span>','</span>');					
                if ( $tags_list ):						
                    echo wp_kses( 							
                        $tags_list,							  
                        // Only allow a tag							  
                        array(
                            'span' => array(								
                                'class' => array()								  
                            ),								
                            'a' => array(								
                                'href' => array()								  
                            ),								
                        )							  
                    );		
                endif; ?>									
            </div>

            <!-- POST SHARE ICONS -->
            <?php if($show_social_sharing_icons == 'on'): ?>
                <div class="col-md-3 col-xl-4 post-share-list text-end">                	
                    <?php if(function_exists('olmo_social_share')): ?>
                        <?php olmo_social_share(); ?>
                    <?php endif; ?>                    
                </div>
            <?php endif; ?>

        </div>

        <?php 
        if($show_next_previous_single != 'off'):
            olmo_next_prev_posts(); 
        endif;
        ?>
                
        <?php get_template_part('author', 'bio'); ?>                 
        
        <?php comments_template( '', true ); ?>

        <?php olmo_related_posts(); ?>

    </div>
<?php endif; ?>