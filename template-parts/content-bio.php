<?php ?>
<section <?php post_class();?>>

<div class="author-name">
  <h2 >
    <?php the_title();?>
  </h2>
  <h3>
    <?php the_field('authors_name');?>
  </h3>
</div>
<div class="entry-thumbnail">
        <img src="<?php the_field('author_pic');?>" alt="">
</div>
<div class="author-tagline">
  <h4>
    <?php the_field('author_tagline');?>
  </h4>
</div>
<div class="author-bio">
    <p >
      <?php the_field('bio');?>
    </p>
  </div>
</section>