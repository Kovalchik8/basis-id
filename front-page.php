<?php get_header(); the_post(); ?>

<?php the_content(); ?>

<?php get_template_part( 'components/component', 'form' ) ?>
<?php get_footer(); ?>