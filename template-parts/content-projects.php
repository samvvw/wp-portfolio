<?php ?>
<section <?php post_class();?>>

<div class="author-name">
  <h2 >

    <?php the_field('project_name');?>
  </h2>
</div>
<div class="entry-thumbnail">
       <?php the_post_thumbnail();?>
</div>
<div class="author-tagline">
  <h3><?php the_field('author_tagline');?></h3>
</div>
<div class="author-bio">
  
    <p >
      <?php the_field('project_description');?>
    </p>
    <a href=""><?php the_field('repo_link');?></a>
    <a href=""><?php the_field('link_to_live_site');?></a>
  </div>
</section>