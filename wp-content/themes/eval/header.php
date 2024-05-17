<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <?php

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" id="site-logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                    }
                ?>
                <div id="site-info">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <?php

                            // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                            //     echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                            // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">Our Gutters available in <span id="dynamicLocation">[Your Location]</span></span></a>';
                            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                        ?>
                    </div>
                    <!-- <div id="site-description" <?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>>
                        <?php #bloginfo( 'description' ); ?>
                    </div> -->
                </div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                <!-- <div id="search"><?php // get_search_form(); ?></div> -->
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">