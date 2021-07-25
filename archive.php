<?php 

get_header(); 

if(is_category()) :
  ?>
  <div class="category-wrapper">
    <h2 class="archive-title">
      <?php the_archive_title(); ?>
    </h2>
  </div>
<?php
elseif (is_search()):
  ?>
  <div class="search-results-heading-wrapper">

    <h2 class="search-results-title">
        Search results for:
          <span>
            <?php the_search_query(); ?>
        </span>
        </h2>
</div>
<?php
elseif (is_tag()):
  ?>
  <div class="tag-wrapper">
    <h2 class="tag-title">
      Tag: 
      <?php single_tag_title(); ?>
    </h2>
  </div>
  <?php
endif;


$portfolio_project_query = new WP_Query(
    array(
        'post_type' => 'porfolio-project',
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

get_footer();