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

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none');
endif;  

get_footer();
