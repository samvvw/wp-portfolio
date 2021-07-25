<?php ?>
<section <?php post_class();?>>

<div class="author-name">
  <h2 >

    <?php the_field('authors_name');?>
  </h2>
</div>
<div class="entry-thumbnail">
        <img src="<?php the_field('author_pic');?>" alt="">
</div>
<div class="author-tagline">
  <h3><?php the_field('author_tagline');?></h3>
</div>
<div class="author-bio">
  <h2>Who am I?</h2>
    <p >
      <?php the_field('bio');?>
    </p>
  </div>
</section>