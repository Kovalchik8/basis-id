<?php /* Template Name: Hook */ ?>

<?php get_header(); the_post(); ?>

<section class="hook">

  <div class="note"> <span><?php echo get_field('hook_text') ?></span> </div>

  <div class="faq__object">
    <i class="fas fa-circle-notch fa-3x rotating"></i>
    <object type="text/html"
      data="https://europe-api.baasisid.com/auth/ui/key/65596335521167430000/multi?orig=https%3A%2F%2Fwww.baasisid.com&api_form_token=a7bfcd1b-f4a6-43d8-a119-a98de27165b6#/"
      width="100%" style="max-width:100%" height="750px" style="overflow:auto;">
    </object>
  </div>

</section>

<?php get_footer(); ?>