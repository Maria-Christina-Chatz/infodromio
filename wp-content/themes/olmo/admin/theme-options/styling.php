<?php
function olmo_styling_options( $options = array() ){
	$options = array(
		array(
        'id'          => 'preset_color',
        'label'       => esc_html__( 'Preset Color', 'olmo' ),
        'desc'        => esc_html__( 'Main preset color', 'olmo' ),
        'std'         => '#0195ff',
        'type'        => 'colorpicker',
        'section'     => 'styling_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector' => '.team-desc small, .show > .btn-primary.dropdown-toggle, .show > .btn-primary.dropdown-toggle, .process-box:hover .process-end, .normal-box h4::after, .image-box h4::after,
                .widget-title:after, .image-box h4::after, .tooltip-inner, .post-publish .fa:hover, .page-link,
                mark, .bg, kbd, .wp-block-search .wp-block-search__button, .search-form .search-submit, .tagcloud a:hover, .tagwidget li a:hover, .wp-block-tag-cloud a:hover, .tagcloud a:focus, .tagwidget li a:focus,
                .wp-block-tag-cloud a:focus, .post-password-form input[type="submit"], .blog-tags h5 span:after,
                .custom-title span:after, .blog-social h5 span:after, .page-links .post-page-numbers.current, .page-links a:hover, .page-links a:focus, .wp-calendar-table td#today, .wp-block-file .wp-block-file__button, .navbar-nav > .menu-item > a:before, .footer-top-part, .footer.footer-style1 .social a:hover, .footer.footer-style1 .social a:focus, .btn-primary, .video-popup, .authorbox .social li a:hover, .authorbox .social li a:focus,.gallery-carousel .owl-prev i, .gallery-carousel .owl-next i, .cat-readmore-con a, .posts-loop:hover .cat-readmore-con .read-more-link, .blog-social a,
                .blog-social .btn, .footer-widget-area .tagcloud a:hover, .footer-widget-area .tagcloud a:focus,
                .tag-widget a:hover, .tagcloud a:hover, .tag-widget a:focus, .tagcloud a:focus, .pagination li a:hover,
                .pagination li a:focus, .pagination li.current a, .sidebar .olmo-categories li a:hover, .sidebar .olmo-categories li a:focus, .bg-skyblue, .btn-skyblue, .scroll .btn-skyblue, .white-color .btn-skyblue,
                .skyblue-hover:hover, .scroll .skyblue-hover:hover, .white-color .skyblue-hover:hover, .advantages li p i, .object, .skyblue-loading .object, .elementor-element .tnp-widget input[type=submit], .newsletter-section .wp-block-tnp-minimal .tnp-submit, .page-item.active .page-link, .bg-orange-red,
                .btn-orange-red, .scroll .btn-orange-red, .white-color .btn-orange-red, .orange-red-hover:hover, .scroll .orange-red-hover:hover, .white-color .orange-red-hover:hover, .wsactive .header .scroll .btn-tra-white, .wsactive .header .nl-simple .btn-tra-white, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover',
                'property'   => 'background-color'
                ),
                array(
                'selector' => '.wsmenu > .wsmenu-list > li > .wsmegamenu .link-list li a:hover, a:hover, a:focus, .wp-calendar-table td a, code, .wp-calendar-nav a, .meta-bottom i, .wp-block-quote cite, .wp-block-quote footer, .wp-block-quote__citation, .wp-block-quote cite a, .light-header.transparent-header .navbar-nav > .menu-item.current-menu-item > a, .light-header.transparent-header .navbar-nav > .menu-item:hover > a, .navbar-nav .menu-item.current-menu-item > a, .navbar-nav .menu-item.current_page_parent > a, .navbar-nav .menu-item:hover > a, .navbar ul li .dropdown-menu li:hover > a, .social a:hover, .social a:focus, .footer .social a:hover, .footer .social a:focus, .summary.entry-summary .social a:hover, .summary.entry-summary .social a:focus, .breadcrumb li a:hover, .breadcrumb li a:focus, .breadcrumb li.active, .footer-widget-area ul li a:hover, .footer-widget-area ul li a:focus, .footer .social a:hover,
                .footer .social a:focus, .more-link:hover, .more-link:focus, .wpcf7 i, .comment-edit-link:hover, .comment-reply-link:hover, .comment-edit-link:focus, .comment-reply-link:focus, .authorbox h4 span, .blog-media.formate-quote i, .blog-meta a:hover, .blog-meta a:focus, .blog-meta .svg-inline--fa, .footer.footer-style1 .blog-list-widget .svg-inline--fa, .blog-list-widget .w-100:hover h5, .blog-list-widget .w-100:focus h5, .widget ul li:after, .sidebar .widget ol li:after, .btn-tra-skyblue, .scroll .btn-tra-skyblue, .white-color .btn-tra-skyblue, .tra-skyblue-hover:hover, .scroll .tra-skyblue-hover:hover, .white-color .tra-skyblue-hover:hover, .skyblue-color, .skyblue-color h2, .skyblue-color h3, .skyblue-color h4, .skyblue-color h5, .skyblue-color h6, .skyblue-color p, .skyblue-color a, .skyblue-color li, .skyblue-color i, .skyblue-color span, .white-color .skyblue-color, .wsmenu > .wsmenu-list > li > .wsmegamenu.w-75 ul.link-list > li > a:hover, .wsmenu > .wsmenu-list > li > .wsmegamenu.halfmenu ul.link-list > li > a:hover, .wsmenu > .wsmenu-list > li.yamm-fw > .wsmegamenu > li a:hover, .wsmenu > .wsmenu-list > li.has-submenu > .wsmegamenu > li a:hover, .wsmenu > .wsmenu-list > li.yamm-fw > .wsmegamenu.link-list > li > a:hover, .wsmenu > .wsmenu-list.nav-skyblue-hover > li > ul.sub-menu > li > a:hover, .wsmenu > .wsmenu-list.nav-skyblue-hover > li > .wsmegamenu.w-75 ul.link-list > li > a:hover, .wsmenu > .wsmenu-list.nav-skyblue-hover > li > .wsmegamenu.halfmenu ul.link-list > li > a:hover, .project-rating a, .team-social-icons li a, p.post-tag i, .post-meta i, .orange-red-color, .orange-red-color h2, .orange-red-color h3, .orange-red-color h4, .orange-red-color h5, .orange-red-color h6, .orange-red-color p, .orange-red-color a, .orange-red-color li, .orange-red-color i, .orange-red-color span, .white-color .orange-red-color',
                'property'   => 'color'
                ),
                array(
                    'selector' => '.wp-block-search .wp-block-search__button, .search-form .search-submit, .page-links .post-page-numbers.current, .page-links a:hover, .page-links a:focus, .wp-calendar-table td#today, .wp-block-quote:not(.is-large):not(.is-style-large), .footer.footer-style1 .social a:hover, .footer.footer-style1 .social a:focus, .footer-widget-area .tagcloud a:hover, .footer-widget-area .tagcloud a:focus, .tag-widget a:hover, .tagcloud a:hover, .tag-widget a:focus, .tagcloud a:focus, .pagination li a:hover, .pagination li a:focus, .pagination li.current a, .btn-skyblue, .scroll .btn-skyblue, .white-color .btn-skyblue, .skyblue-hover:hover, .scroll .skyblue-hover:hover, 
                    .white-color .skyblue-hover:hover, .elementor-element .tnp-widget input[type=submit], .newsletter-section .wp-block-tnp-minimal .tnp-submit, .page-item.active .page-link, .btn-tra-skyblue, .scroll .btn-tra-skyblue, .white-color .btn-tra-skyblue, .tra-skyblue-hover:hover, .scroll .tra-skyblue-hover:hover, .white-color .tra-skyblue-hover:hover, .btn-orange-red, .scroll .btn-orange-red, .white-color .btn-orange-red, .orange-red-hover:hover, .scroll .orange-red-hover:hover, .white-color .orange-red-hover:hover, .wsactive .wsmenu > .wsmenu-list > li a.btn:hover, .wsactive .wsmenu > .wsmenu-list > li a.btn:focus, .wsactive .header .scroll .btn-tra-white, .wsactive .header .nl-simple .btn-tra-white, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current',
                    'property'   => 'border-color'
                ),
				array(
                    'selector' => '.tooltip.tooltip-top .tooltip-inner::before, .tooltip.bs-tether-element-attached-bottom .tooltip-inner::before',
                    'property'   => 'border-top-color'
                ),
				array(
                    'selector' => '.tooltip.tooltip-bottom .tooltip-inner::before, .tooltip.bs-tether-element-attached-top .tooltip-inner::before',
                    'property'   => 'border-bottom-color'
                ),
				array(
                    'selector' => '.wp-block-quote.is-style-large, .wp-block-quote.is-large, .wp-block-quote,
                    blockquote, .quote p.p-xl',
                    'property'   => 'border-left-color'
                ),
            )
      ),
	  
	  array(
        'id'          => 'preset_color_2',
        'label'       => esc_html__( 'Secondary Preset Color', 'olmo' ),
        'desc'        => esc_html__( 'Secondary preset color', 'olmo' ),
        'std'         => '#2f353e',
        'type'        => 'colorpicker',
        'section'     => 'styling_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector' => '',
                'property'   => 'background-color'
                ),
                array(
                'selector' => '',
                'property'   => 'color'
                ),
                array(
                    'selector' => '',
                    'property'   => 'border-color'
                ),
				array(
                    'selector' => '',
                    'property'   => 'text-decoration-color' 
                ),
            )
      ),
    );

	return apply_filters( 'olmo_styling_options', $options );
}  
?>