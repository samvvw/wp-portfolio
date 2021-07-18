<?php ?>
<section <?php post_class();?>>

<div class="author-name">
  <h2 >

    <?php the_field('authors_name');?>
  </h2>
</div>
<div class="author-bio">
    <p >

      <?php the_field('bio');?>
    </p>
  </div>
</section>