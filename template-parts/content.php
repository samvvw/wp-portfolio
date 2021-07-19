<?php ?>
<article <?php post_class(); ?> >

<h2 class="entry-title">
<?php 
  if(is_single()) :
?>
  <i class="fas fa-bread-slice"></i>
<?php
    the_title();
  else : ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <?php 
  endif;
  ?>
</h2>  
<?php if(!is_single()) :?>
<div class="entry-tags">
  
<?php 
                the_tags('', "<span> &#9737; </span>");
                ?>
</div>
<?php endif; ?>
<div class="entry-thumbnail">
<?php 
    the_post_thumbnail();
 
 ?>
</div>
  <div class="entry-content">
  <?php 
    if(is_single()) :
      the_content();
      else :
      the_excerpt();
    endif;
  ?>
  </div>
  <?php if(is_single()) :?>
    <div class="entry-bottom-categories">
      <i class="fas fa-folder"></i>
        <?php 
        the_category(' &#8226; ', " ");
        ?>
    </div>
      <div class="entry-bottom-tags">
        <i class="fas fa-tag"></i>
        <?php 
        the_tags('Tags: ', " | ");
        ?>
      </div>
  <?php endif; ?>
  
</article>
