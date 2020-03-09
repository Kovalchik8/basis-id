<?php /* Template Name: Documents */ ?>
<?php get_header(); the_post(); ?>

<section class="documents">

  <?php the_content(); ?>

  <?php get_template_part('components/component', 'form'); ?>

  <!-- Modal -->
  <div class="modal modal-download fade bd-example-modal-lg" id="downloadModal" tabindex="-1" role="dialog"
    aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo get_theme_file_uri('/img/documents/close.svg') ?>" alt="close">
        </button>
        <div class="modal-body">
          <div class="modal-download__left">
            <div class="headline headline--small">POP UP Title for 2 rows maximum</div>
            <p class="desc">A list of the critical regulations you need to be aware of in 2019 when choosing your AML.
            </p>
            <input type="email" name="email" placeholder="Type your email">
            <button type="submit" class="btn btn--pink">Download</button>
          </div>
          <div class="modal-download__right">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>