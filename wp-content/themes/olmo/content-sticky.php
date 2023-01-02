<?php $blog_comment_show = (function_exists('ot_get_option'))? ot_get_option( 'blog_comment_show', 'on' ) : 'on'; ?>
<div class="rel blog-post-wide featured-post">
    <div class="row d-flex align-items-center">
        <!-- Featured Badge -->
        <div class="featured-badge ico-25 bg-whitesmoke yellow-color">
            <i class="cs-icon cs-star-1"></i>
        </div>
                                                    
        <!-- BLOG POST IMAGE -->
        <?php
        $column_class = '12';
        $column_class2 = '12';
        if(has_post_thumbnail()): 
            $column_class = '7';
            $column_class2 = '5';
            ?>
            <div class="col-lg-<?php echo esc_attr($column_class); ?> blog-post-img">
                <div class="hover-overlay">
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <?php the_post_thumbnail( 'olmo-medium' ); ?>
                    </a>
                    <div class="item-overlay"></div>
                </div>
            </div>
        <?php endif; ?>

        <!-- BLOG POST TEXT -->
        <div class="col-lg-<?php echo esc_attr($column_class2); ?> blog-post-txt">
            <div class="content-des-wrp">
            <!-- Post Tag -->
            <p class="p-md post-tag d-flex justify-content-between">
                <?php if(!empty(get_the_category())):?>
                    <span><i class="cs-icon cs-folder"></i><?php the_category(', '); ?></span>
                <?php endif; ?>
                <a href="<?php esc_url(the_permalink()); ?>" class="date-meta"><i class="cs-icon cs-calendar-1"></i><?php echo get_the_date(); ?></a>
            </p>

            <!-- Post Link -->
            <?php the_title('<h5 class="h5-xl"><a href="'.esc_url(get_the_permalink()).'">', '</a></h5>'); ?>

            <!-- Text -->
            <p class="p-lg"><?php echo wp_trim_words(get_the_content(), 18, ''); ?></p>

            <!-- Post Meta -->
            <?php if($blog_comment_show == 'on'): ?>
            <div class="post-meta">
                <p class="p-md">
                    <a href="<?php esc_url(comments_link()); ?>"><i class="cs-icon cs-chat-1"></i>
                        <?php comments_number( esc_html__('0 Comments', 'olmo'), esc_html__('1 Comment', 'olmo'), esc_html__('% Comments', 'olmo') ) ?>
                    </a>
                </p>
            </div>
            <?php endif; ?>
        </div>	<!-- END BLOG POST TEXT -->
        </div>
    </div>   <!-- End row -->
</div>	<!-- END FEATURED POST -->