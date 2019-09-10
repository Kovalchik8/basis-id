<section class="about" id="About">
  <div class="container">
    <div class="row">
      <div class="col-md-6 about__left">
        <div class="img-wrapper">
          <img class="img-fluid" src="<?php echo get_field('home_about-image') ?>" alt="about">
          <a data-toggle="modal" data-target="#videoModal">
            <svg width="30" height="51" viewBox="0 0 30 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.5 25.5L0 0V51L29.5 25.5Z" fill="#2E5BFF" />
              <path d="M29.5 25.5L0 0V51L29.5 25.5Z" fill="url(#paint0_linear)" fill-opacity="0.228" />
              <defs>
                <linearGradient id="paint0_linear" x1="-1.90593e-06" y1="29.5" x2="30.5" y2="26"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="white" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-md-6 about__right">
        <h3 class="headline headline--small"><?php echo get_field('home_about-title') ?>
        </h3>
        <div class="text-gray">
          <p><?php echo get_field('home_about-text') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal modal-video fade bd-example-modal-lg" id="videoModal" tabindex="-1" role="dialog"
  aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" id="modalVideoBody">
        <?php echo get_field('home_about-link'); ?>
      </div>
    </div>
  </div>
</div>