    <footer class="p-3 bg-secondary text-light text-decoration-none">
        <div><?php bloginfo('name'); ?> &copy; 2020 </div>
            <?php get_sidebar(); ?>
        <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>