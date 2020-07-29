<?php /* Template Name: Projects Template */ ?>
<?php get_header(); ?>


<main class="d-flex flex-column align-items-center">
        
        <div class="row m-0 w-100 justify-content-center min-vh-50">
            <div class="about d-flex flex-column col-sm-12 col-md-10 col-lg-8 justify-content-around">
                <h2 class="text-center my-5">About</h2>
<?php while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
            </div>
        </div>

        <div class="row m-0 w-100 justify-content-center min-vh-50">
            <div class="contact d-flex flex-column col-sm-12 col-md-10 col-lg-8 justify-content-around">
                <h2 class="text-center">Contact</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="contact-body d-flex justify-content-around">
                    <a href="#" aria-label="Email " class="h2 text-dark"><i class="fas fa-envelope-square fa-4x" aria-hidden="true"></i></a>
                    <a href="#" aria-label="LinkedIn" class="h2 text-dark"><i class="fab fa-linkedin fa-4x" href="#" aria-hidden="true"></i></a>
                    <a href="#" aria-label="Github" class="h2 text-dark"><i class="fab fa-github-square fa-4x" href="#" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="row m-0 w-100 justify-content-center min-vh-50 mb-5">
            <div class="projects d-flex flex-column col-sm-12 col-md-10 col-xl-8 justify-content-around">
                <h2 class="text-center my-5">Personal Projects</h2>
                <p class="my-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="d-sm-flex flex-wrap"> 
<?php
$loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="project card m-1">
                    <img class="card-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <div class="card-img-overlay text-white d-flex flex-column justify-content-around">
                        <h3 class="card-title"><?php print get_the_title(); ?></h3>       
                        <p class="card-text"><?php print get_the_excerpt(); ?></p>   
                        <a href="<?= get_post_meta($post->ID, 'github-link', true)?>" class="stretched-link btn btn-outline-light">View on Github</a>
                    </div>
                </div>
<?php endwhile; ?>
                </div>
            </div>
        </div>
        
    </main>
<?php get_footer(); ?>