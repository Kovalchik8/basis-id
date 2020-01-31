<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

get_header(); ?>

  <section class="blog">

    <?php while (have_posts()) : the_post();

      get_template_part('components/content', 'single');

    endwhile; // End of the loop. ?>

  </section>

<?php get_footer(); ?>