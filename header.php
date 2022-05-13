<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php scegliquando_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner" class="bg-primary">
            <div class="container">

                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <img lazy="true" class="logo" src="http://scegli.test/assets/img/scegli-quando-logo-check.png">
                    </div>
                </div>
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu([
                            'theme_location' => 'main-menu', 
                            'link_before' => '<span itemprop="name">', 
                            'link_after' => '</span>'
                        ]); ?>
                </nav>
            </div>
        </header>
        <div class="container">