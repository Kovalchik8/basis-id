<div class="hero hero--product hero--product-new align-center">
  <div class="container hero__left">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <span class="left-upper-text"><?php echo get_field('product_hero-top') ?> </span>
        <h1 class="title title--wave"><?php echo get_field('product_hero-title') ?></h1>
        <p><?php echo get_field('product_hero-text') ?></p>
      </div>
    </div>
    <div class="hero__icons">

      <?php $icons = get_field('product_hero-icons');
      foreach($icons as $icon) { ?>

      <div class="icon">
        <img class="img-fluid" src="<?php echo $icon['image'] ?>" alt="partner">
      </div>

      <?php } ?>

    </div>
    <div class="buttons">
      <button class="btn btn--pink scroll-to-form"><?php echo get_field('product_hero-btn-1') ?></button>
      <div class="buttons__wrapper">
        <span> or </span>
        <a href="" class=""><?php echo get_field('product_hero-btn-2') ?></a>
      </div>
    </div>
  </div>
</div>