<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog__item-single'); ?>>
  <div class="blog__wrapper">
    <?php the_title( '<h1 class="headline headline--large">', '</h1>' ) ?>
    <div class="blog__date">Updated <?php echo get_post_modified_time( 'd.m.Y' ) ?></div>
  </div>
  <div class="img-fluid-single">
    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post->ID, 'tabor-featured-image-lrg') ?>" alt="<?php the_title_attribute() ?>">
  </div>
  <div class="desc blog__wrapper">
    <?php the_content(); ?>
  </div>
</article>