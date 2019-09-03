<div class="hero hero--product align-center">
  <div class="container hero__left">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <span class="left-upper-text"><?php echo get_field('product_hero-top') ?> </span>
        <h1 class="title title--wave"><?php echo get_field('product_hero-title') ?></h1>
        <p><?php echo get_field('product_hero-text') ?></p>
      </div>
    </div>
    <div class="row hero__icons">

      <?php $icons = get_field('product_hero-icons');
      foreach($icons as $icon) { ?>

      <div class="col-md-3 col-6  ">
        <img class="img-fluid" src="<?php echo $icon['image'] ?>" alt="partner">
      </div>

      <?php } ?>

    </div>
    <div class="buttons">
      <button class="btn btn--pink scroll-to-form">Request a demo</button>
      <div class="buttons__wrapper">
        <span> or </span>
        <a href="" class="">Learn more</a>
      </div>
    </div>
  </div>
</div>