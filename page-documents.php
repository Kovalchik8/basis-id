<?php /* Template Name: Documents */ ?>
<?php get_header(); ?>

<section class="documents">
  <div class="documents__hero">
    <div class="container">
      <h1 class="title">Documents</h1>
      <p>Philosophy of BASIS ID is to treat data as a value. Personal data is a personal value! We guarantee full
        compliance with FATF, MAS, GDPR, FINMA, FCA and CySEC requirements.</p>
    </div>
  </div>

  <div class="documents__list container">

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/1.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a data-toggle="modal" data-target="#downloadModal" href="#" class="btn btn--pink">Download</a>
      </div>
    </div>

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/2.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a href="#" data-toggle="modal" data-target="#downloadModal" class="btn btn--pink">Download</a>
      </div>
    </div>

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/3.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a href="#" data-toggle="modal" data-target="#downloadModal" class="btn btn--pink">Download</a>
      </div>
    </div>

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/1.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a href="#" data-toggle="modal" data-target="#downloadModal" class="btn btn--pink">Download</a>
      </div>
    </div>

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/2.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a href="#" data-toggle="modal" data-target="#downloadModal" class="btn btn--pink">Download</a>
      </div>
    </div>

    <div class="item">
      <div class="thumb"
        style="background: url('<?php echo get_theme_file_uri('/img/documents/3.jpg') ?> ') top/cover no-repeat;">
      </div>
      <div class="details">
        <h2 class="headline">Key AML laws: a brief analysis</h2>
        <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML compliance strategy
          and starting the KYC procedure. Let your CEO, legal or risk & compliance departments consider this.</p>
        <a href="#" data-toggle="modal" data-target="#downloadModal" class="btn btn--pink">Download</a>
      </div>
    </div>

  </div>

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
            <p>A list of the critical regulations you need to be aware of in 2019 when choosing your AML.</p>
            <input type="email" name="email" placeholder="Type your email">
            <a href="#" class="btn btn--pink">Download</a>
          </div>
          <div class="modal-download__right">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>