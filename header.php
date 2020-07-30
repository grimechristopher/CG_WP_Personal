<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php bloginfo('name'); ?></title>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?=bloginfo('description')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <meta name="theme-color" content="#fafafa">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <header class="site-header d-flex flex-column">
        <nav id="top-nav" class="navbar w-100 px-3 py-1 position-fixed">
            <img src="icon.png" height="64" width="64" class="">
            <h2  id="nav-bar-title" class="text-light d-none d-md-block"><?php bloginfo('name'); ?></h2>
<?php if( get_theme_mod( 'resume_link_block') != "" ): ?>
    <a href="<?php echo get_theme_mod( 'resume_link_block'); ?>" class="btn btn-lg btn-outline-light ">Resume</a>
<?php endif; ?>
        </nav>
<?php if (display_header_text() == true): ?>
        <div class="jumbotron d-flex flex-column justify-content-center text-center text-light">
            <h1 id="header-title" class="display-2"><?php bloginfo('name'); ?></h1>
            <p id="header-summary" class="lead"><?php bloginfo('description'); ?></p>
        </div>
<?php endif;?>
    </header>