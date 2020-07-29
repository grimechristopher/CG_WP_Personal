<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php bloginfo('name'); ?> || <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title" content="">
    <meta property="og:type" content="">
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
            <img src="icon.png" height="64" width="64" class="navbar-brand">
            <h2 class="text-light d-none d-md-block"><?php bloginfo('name'); ?></h2>
            <a href="#" class="btn btn-lg btn-outline-light ">Resume</a>
        </nav>
<?php if (display_header_text() == true): ?>
        <div class="jumbotron d-flex flex-column justify-content-center text-center text-light">
            <h1 id="header-title" class="display-2"><?php bloginfo('name'); ?></h1>
            <p id="header-summary" class="lead"><?php bloginfo('description'); ?></p>
        </div>
<?php endif;?>
    </header>