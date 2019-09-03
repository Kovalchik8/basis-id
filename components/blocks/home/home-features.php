<section class="features">
  <div class="container">
    <h3 class="headline headline--padding"><?php echo get_field('home_features-title') ?></h3>
  </div>

  <div class="container-fluid features__list">

    <?php $features = get_field('home_features-list');
    foreach($features as $key=>$feature) {
    
    if($key++ % 2 == 0) { ?>

    <div class="row features__item features__item--odd">
      <div class="left col-lg-6">
        <div class="features__desc">
          <h3 class="headline"><?php echo $feature['title'] ?></h3>
          <p><?php echo $feature['text'] ?></p>
        </div>
      </div>
      <div class="right col-lg-6">
        <img src="<?php echo $feature['image'] ?>" alt="feature">
      </div>
    </div>

    <?php } else { ?>

    <div class="row features__item features__item--even">
      <div class="left left--home col-lg-6">
        <img src="<?php echo $feature['image'] ?>" alt="feature">
      </div>
      <div class="right col-lg-6">
        <div class="features__desc">
          <h3 class="headline"><?php echo $feature['title'] ?></h3>
          <p><?php echo $feature['text'] ?></p>
        </div>
      </div>

    </div>

    <?php } } ?>

  </div>
</section>