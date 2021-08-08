
</main>
    <footer>
        <p>&copy; Samuel Villegas, 2021</p>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-social',
            'container' => 'div',
            'container_class' => 'menu-container',
            'menu_class' => 'social-menu',
            'link_before' => '<span class="visually-hidden">',
            'link_after' => '</span>'
            
        ));
        ?>
    </footer>
    </div> 
    <!-- content area -->
    <!-- Footer area -->
    <?php wp_footer(); ?>
    <!-- Footer area end -->
</body>
</html>