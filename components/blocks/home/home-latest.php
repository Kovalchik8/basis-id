<section class="latest">
  <h3 class="headline align-center"><?php echo get_field('home_latest-title') ?></h3>
  <div class="container">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <div class="latest__item">
          <div class="left">
            <span>Basis ID blog</span>
            <h2 class="headline"><?php echo get_field('home_latest-article') ?></h2>
            <a href="<?php echo get_field('home_latest-link') ?>" class="btn btn--blue">Read the story</a>
          </div>
          <div class="right"></div>
        </div>
      </div>
    </div>
  </div>
</section>