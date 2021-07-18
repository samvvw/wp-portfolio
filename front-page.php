<?php 

get_header();
?>
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
<?php
get_footer();
?>