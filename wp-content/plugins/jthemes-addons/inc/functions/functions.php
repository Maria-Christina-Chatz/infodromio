<?php
function olmo_social_share(){
	global $post;
	?>
	<ul class="share-social-icons ico-25 text-center clearfix">
        <li>
            <a target="_blank" href="//www.facebook.com/share.php?u=<?php print(urlencode(the_permalink())); ?>&title=<?php print(urlencode(get_the_title())); ?>" title="<?php esc_html_e('Share on Facebook', 'olmo')?>" class="share-ico">
                <i class="cs-icon cs-facebook"></i>
            </a>
        </li>
        <li>
            <a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>:<?php esc_url(the_permalink()); ?>" title="<?php esc_html_e('Share on Twitter', 'olmo')?>" class="share-ico">
                <i class="cs-icon cs-twitter"></i>
            </a>
        </li>
        <li>
            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php esc_url(the_permalink()); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=LinkedIn" title="<?php esc_html_e('Share on Linkedin', 'olmo')?>" class="share-ico">
                <i class="cs-icon cs-linkedin"></i>
            </a>
        </li>
	</ul>
	<?php
}

function olmo_new_contactmethods( $olmo_contactmethods ) {
	// Add Twitter
	$olmo_contactmethods['twitter'] = esc_html__('Twitter', 'olmo');
	//add Facebook
	$olmo_contactmethods['facebook'] = esc_html__('Facebook', 'olmo');
	//add LinkedIn
	$olmo_contactmethods['behance'] = esc_html__('Behance', 'olmo');
	//add GooglePlus
	$olmo_contactmethods['youtube'] = esc_html__('Youtube', 'olmo');
	//add Dribbble
	$olmo_contactmethods['linkedin'] = esc_html__('LinkedIn', 'olmo');
	 
	return $olmo_contactmethods;
}
add_filter('user_contactmethods','olmo_new_contactmethods',10,1);

function olmo_social_link_author(){
	global $post;
	?>
    <div class="author-social">
    	<?php if(get_the_author_meta('facebook') != ''): ?>
        <a href="<?php echo esc_url(get_the_author_meta('facebook')); ?>" title="<?php echo esc_attr__('Facebook', 'olmo'); ?>"><i class="fa fa-facebook"></i></a>
        <?php endif; ?>
        <?php if(get_the_author_meta('twitter') != ''): ?>
        <a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>" title="<?php echo esc_attr__('Twitter', 'olmo'); ?>"><i class="fa fa-twitter"></i></a>
        <?php endif; ?>
        <?php if(get_the_author_meta('instagram') != ''): ?>
        <a href="<?php echo esc_url(get_the_author_meta('instagram')); ?>" title="<?php echo esc_attr__('Instagram', 'olmo'); ?>"><i class="fa fa-instagram"></i></a>
        <?php endif; ?>
        <?php if(get_the_author_meta('pinterest') != ''): ?>
        <a href="<?php echo esc_url(get_the_author_meta('pinterest')); ?>" title="<?php echo esc_attr__('Pinterest', 'olmo'); ?>"><i class="fa fa-pinterest"></i></a>
        <?php endif; ?>
    </div>
	<?php
}

add_action( 'woocommerce_single_product_summary', 'olmo_template_single_sharing', 50 );

function olmo_template_single_sharing(){
	global $post;
	?>
        
    <ul class="social">
    	<li><?php echo esc_html__('Share This: ', 'olmo'); ?></li>
        <li class="facebook">        
        <a href="//www.facebook.com/share.php?u=<?php echo esc_url(get_permalink($post->ID)); ?>" target="_blank" title="<?php echo esc_attr__('Facebook', 'olmo'); ?>" data-toggle="tooltip" data-placement="bottom" data-animation="false"><i class="cs-icon cs-facebook"></i></a></li>
        <li class="twitter"><a href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php echo esc_url(get_permalink($post->ID)); ?>" target="_blank" title="<?php echo esc_attr__('Twitter', 'olmo'); ?>" data-toggle="tooltip" data-placement="bottom" data-animation="false"><i class="cs-icon cs-twitter"></i></a></li>
        <li class="linkedin"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url(get_permalink($post->ID)); ?>&title=<?php echo esc_attr(get_the_title($post->ID)); ?>&summary=&source=" target="_blank" title="<?php echo esc_attr__('LinkedIn', 'olmo'); ?>" data-toggle="tooltip" data-placement="bottom" data-animation="false"><i class="cs-icon cs-linkedin"></i></a></li>        
        <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink($post->ID)); ?>&amp;description=<?php echo esc_attr(get_the_title($post->ID)); ?>" target="_blank" title="<?php echo esc_attr__('Pinterest', 'olmo'); ?>" data-toggle="tooltip" data-placement="bottom" data-animation="false"><i class="cs-icon cs-pinterest-round-logo"></i></a>
    </ul>
    <?php
}