<?php /* Template Name: Simple Page */ ?>
<?php get_header(); the_post(); ?>

<section class="simple-page">
  <div class="container">
    <h1 class="headline"><?php echo get_the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</section>

<?php get_footer();?>