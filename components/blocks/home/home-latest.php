<section class="latest">
  <h3 class="headline align-center"><?php echo get_field('home_latest-title') ?></h3>
  <div class="container">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <div class="latest__item">
          <div class="left">
            <span>BASIS ID blog</span>
            <h2 class="headline"><?php echo get_field('home_latest-article') ?></h2>
            <a href="<?php echo get_field('home_latest-link') ?>" class="btn btn--blue">Read the story</a>
          </div>
          <div class="right"
            style="background: url('<?php echo get_field('home_latest-image') ?> ') top/cover no-repeat;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>