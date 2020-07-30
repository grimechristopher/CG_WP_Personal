<?php /* Template Name: Projects Template */ ?>
<?php get_header(); ?>


<main class="d-flex flex-column align-items-center">
        
        <div class="row m-0 w-100 justify-content-center min-vh-50">
            <div class="about d-flex flex-column col-sm-12 col-md-10 col-lg-8 justify-content-around">
<?php while(have_posts()): the_post(); ?>
                <h2 class="text-center my-5"><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; ?>
            </div>
        </div>

        <div class="row m-0 w-100 justify-content-center min-vh-50">
            <div class="contact d-flex flex-column col-sm-12 col-md-10 col-lg-8 justify-content-around">
                <h2 class="text-center">Contact</h2>
<?php if( get_theme_mod( 'contact_text_block') != "" ): ?>
                <p><?php echo get_theme_mod( 'contact_text_block'); ?></p>
<?php endif; ?>
                <div class="contact-body d-flex justify-content-around">
<?php if( get_theme_mod( 'email_link_block') != "" ): ?>
                <a href="mailto:<?php echo get_theme_mod( 'email_link_block'); ?>" aria-label="Email " class="h2 text-dark"><i class="fas fa-envelope-square fa-4x" aria-hidden="true"></i></a>
<?php endif; ?>
<?php if( get_theme_mod( 'linkedin_link_block') != "" ): ?>
                <a href="<?php echo get_theme_mod( 'linkedin_link_block'); ?>" aria-label="LinkedIn" class="h2 text-dark"><i class="fab fa-linkedin fa-4x" href="#" aria-hidden="true"></i></a>
<?php endif; ?>
<?php if( get_theme_mod( 'github_link_block') != "" ): ?>
                <a href="<?php echo get_theme_mod( 'github_link_block'); ?>" aria-label="Github" class="h2 text-dark"><i class="fab fa-github-square fa-4x" href="#" aria-hidden="true"></i></a>
<?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row m-0 w-100 justify-content-center min-vh-50 mb-5">
            <div class="projects d-flex flex-column col-sm-12 col-md-10 col-xl-8 justify-content-around">
                <h2 class="text-center my-5">Personal Projects</h2>
<?php if( get_theme_mod( 'projects_text_block') != "" ): ?>
                <p class="my-5"><?php echo get_theme_mod( 'projects_text_block'); ?></p>
                <div class="d-sm-flex flex-wrap"> 
<?php endif; ?>
<?php
$loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="project card m-1">
                        <img class="card-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <div class="card-img-overlay text-white d-flex flex-column justify-content-around">
                            <h3 class="card-title"><?php print get_the_title(); ?></h3>       
                            <p class="card-text"><?php print get_the_excerpt(); ?></p>   
<?php if( get_post_meta($post->ID, 'github-link', true) ): ?>
                            <a href="<?= get_post_meta($post->ID, 'github-link', true)?>" class="btn btn-outline-light">View on Github</a>
<?php endif; ?>
<?php if( get_post_meta($post->ID, 'live-link', true) ): ?>
                            <a href="<?= get_post_meta($post->ID, 'live-link', true)?>" class="btn btn-outline-light">View Demo</a>
<?php endif; ?>                        
                        </div>
                    </div>
<?php endwhile; ?>
                </div>
            </div>
        </div>
        
    </main>
<?php get_footer(); ?>