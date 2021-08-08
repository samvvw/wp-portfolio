<?php 

get_header();
?>
<!-- author bio area -->
<?php
$author_bio_query = new WP_Query(
    array(
        'post_type' => 'author-bio',
        'posts_per_page' => '1',
    )
);

if ( $author_bio_query -> have_posts() ) :
    while ( $author_bio_query -> have_posts() ) :
        $author_bio_query -> the_post();
        get_template_part('template-parts/content-bio');
    endwhile;
else :
    get_template_part('template-parts/content-none.php');
endif;
?>
<!-- author bio area end -->

<!-- skills area -->
<section class="skill-section-wrapper">
    <h2>Technologies</h2>
    <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-skills',
            'container' => 'div',
            'container_class' => 'menu-container',
            'menu_class' => 'skills-menu'
            
        ));
    ?>
</section>
<!-- skills area end -->
<!-- projects area -->
<section class="projects-section-wrapper">

    <h2>My Projects</h2>
    <?php
$portfolio_project_query = new WP_Query(
    array(
        'post_type' => 'porfolio-project',
        'posts_per_page' => '3',
        )
    );
    
    if ( $portfolio_project_query -> have_posts() ) :
        while ( $portfolio_project_query -> have_posts() ) :
            $portfolio_project_query -> the_post();
            get_template_part('template-parts/content-projects');
        endwhile;
        else :
            get_template_part('template-parts/content-none.php');
        endif;
        ?>
</section>
<!-- projects area end -->
<?php
get_footer();
?>