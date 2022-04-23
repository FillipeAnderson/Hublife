<?php if( is_single() ) : ?>

<?php else : ?>

<?php endif; ?>

<div class="col-xs-12 col-sm-12 col-md-4 mt-5">
 <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-post')); ?>
<h5 class="text-primary mt-3"><?php the_title(); ?></h5>
   <?php the_excerpt(); ?>
  <a class="nav-link p-0" href="<?php the_permalink(); ?>">Saiba mais</a>
    <hr class="py-6">
 </div>
 
