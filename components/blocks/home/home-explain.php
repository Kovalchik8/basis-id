<section class="explain">
  <div class="container-wrapper">
    <div class="container">
      <h3 class="headline headline--padding"><?php echo get_field('home_explain-title') ?></h3>
      <div class="row explain__list">

        <div class="col-md-6 explain__left">

          <?php $explain_left = get_field('home_explain-list');
          foreach($explain_left as $item) { ?>

          <div class="explain__item">
            <img src="<?php echo $item['image'] ?>" alt="icon">
            <p><?php echo $item['text'] ?>
            </p>
          </div>

          <?php } ?>

        </div>

        <div class="col-md-6 explain__right">

          <?php $explain_right = get_field('home_explain-list-right');
          foreach($explain_right as $item) { ?>

          <div class="explain__item">
            <img src="<?php echo $item['image'] ?>" alt="icon">
            <p><?php echo $item['text'] ?>
            </p>
          </div>

          <?php } ?>

        </div>

      </div>
      <div class="explain__button align-center">
        <a href="<?php echo get_field('home_explain-link') ?>" class="btn btn--pink">All features</a>
      </div>
    </div>
  </div>
</section>