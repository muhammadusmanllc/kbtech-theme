<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container header-flex">
        <div class="site-branding">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/header-logo.svg" alt="Logo">
</a>
        </div>
        
        <div class="header-right">
            <nav class="site-navigation">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                    ) );
                } else {
    ?>
    <ul class="menu">
        <li class="menu-item-has-children">
            <a href="#services">Services</a>
            <ul class="sub-menu">
                <li><a href="#">Website Development</a></li>
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Ecommerce Solutions</a></li>
                <li><a href="#">SEO Services</a></li>
                <li><a href="#">Social Media Marketing (SMM)</a></li>
                <li><a href="#">Animation</a></li>
                <li><a href="#">Illustration</a></li>
                <li><a href="#">Mobile Apps</a></li>
                <li><a href="#">Dispatch Handling</a></li>
                <li><a href="#">Content Writing</a></li>
                
                <!-- Level 3: Sub Services -->
                <li class="menu-item-has-children">
                    <a href="#">Academic Writing ▸</a>
                    <ul class="sub-menu">
                        <li><a href="#">Thesis Writing</a></li>
                        <li><a href="#">Dissertation Writing</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="http://kbt.local/portfolio/">Portfolio</a></li>
        <li><a href="http://kbt.local/about-us/">About</a></li>
        <li><a href="http://kbt.local/contact-us/">Contact</a></li>
    </ul>
    <?php
}
                ?>
            </nav>
            <a href="#contact" class="btn btn-primary btn-sm">Get Started</a>
            
        </div>
    </div>
</header>