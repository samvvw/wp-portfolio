<?php ?>
<section <?php post_class();?>>

<div class="author-name">
    <?php the_field('authors_name');?>
</div>
<div class="author-bio">
    
    <?php the_field('bio');?>
  </div>
</section>