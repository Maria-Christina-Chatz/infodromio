<header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper">
        <?php
        $logo = (function_exists('ot_get_option'))? ot_get_option( 'main_logo', OLMOTHEMEURI . 'images/logo.png' ) : OLMOTHEMEURI . 'images/logo.png';
        $mobile_logo = (function_exists('ot_get_option'))? ot_get_option( 'mobile_logo', OLMOTHEMEURI . 'images/logo-white.png' ) : OLMOTHEMEURI . 'images/logo-white.png'; 
        ?>

        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">	  	
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><span class="smllogo"><img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></span></a>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
        </div>

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">

                <!-- HEADER LOGO -->
                <div class="desktoplogo">
                    <a class="logo-black" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <?php if($logo != ''): ?>
                            <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                        <?php else: ?>
                            <?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="desktoplogo">
                    <a class="logo-white" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <?php if($mobile_logo != ''): ?>
                            <img src="<?php echo esc_attr($mobile_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                        <?php else: ?>
                            <?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?>
                        <?php endif; ?>
                    </a>
                </div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php $header_button = (function_exists('ot_get_option'))? ot_get_option( 'header_button', '' ) : '';
                    $header_button_link = (function_exists('ot_get_option'))? ot_get_option( 'header_button_link', '' ) : '';
                    $extra_links = '';
                    if( $header_button != '' && $header_button_link != '' ):
                        $extra_links = '<li class="nl-simple" aria-haspopup="true">
                            <a href="'.esc_url($header_button_link).'" class="btn btn-skyblue tra-grey-hover last-link">'.esc_html($header_button).'</a>
                        </li>';
                    endif;
                    ?>
                    <?php
                    if ( is_page_template( 'page-templates/one-page.php' ) ) {
                        $menu_name = get_post_meta( get_the_ID(), 'onepage_menu_select', true );	
                        wp_nav_menu(
                            array(
                            'menu' 			  => $menu_name,
                            'theme_location' => 'main-menu',
                            'menu_class' => 'wsmenu-list nav-skyblue-hover',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s'.$extra_links.'</ul>',
                            'container' => false,
                            'fallback_cb'     => '',
                            'walker' => new olmo_scm_walker
                            )
                        );
                    } else {							
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'wsmenu-list nav-skyblue-hover',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s'.$extra_links.'</ul>',
                                'container' => false,
                                'fallback_cb'     => '',
                                'walker' => new olmo_scm_walker
                            )
                        );
                    }
                    ?>  
                </nav>	<!-- END MAIN MENU -->
            </div>
        </div>	<!-- END NAVIGATION MENU -->
    </div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->