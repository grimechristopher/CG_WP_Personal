<?php get_header(); ?>
<main class="wrap">
    <section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-loop">
            <header>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <h5><?php the_author(); ?></h5>
            </header>
            <?php the_excerpt(); ?>
        </article>
<?php endwhile; else : ?>
        <article>
            <p>Nothing is here.</p>
        </article>
<?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
</main>
<?php get_footer(); ?>