<?php ?>
<article <?php post_class();?>>

  <div class="project-description">
<div class="project-name">
  <h3 >

    <?php the_field('project_name');?>
  </h3>
</div>
  <p >
    <?php the_field('project_description');?>
  </p>
  <div class="project-links">
    <a href="<?php the_field('repo_link');?>" target="blank"><span class="visually-hidden">GitHub Repo</span></a>
    <a href="<?php the_field('link_to_live_site');?>" target="blank"><span class="visually-hidden">Live Site</span></a>
  </div>
</div>
<div class="entry-thumbnail">
       <?php the_post_thumbnail();?>
</div>
<div class="project-tags">
  
<?php 
                the_tags('','');
                ?>

</div>
<hr>
</article>