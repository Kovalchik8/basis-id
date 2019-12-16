<?php $block = get_field('home-numbers_content'); ?>

<section class="home-numbers">
  <div class="container container--wide">

    <h3 class="home-headline"><?php echo $block['title']; ?></h3>
    <p class="home-under-headline">
      <?php echo $block['under-title']; ?>
    </p>

    <div class="row list">

      <?php $list = $block['list'];
      foreach($list as $item) { ?>

      <div class="col-lg-3 col-md-6">
        <div class="item" style="background-color: <?php echo $item['bg'] ?>">
          <div class="number" style="color: <?php echo $item['color'] ?>"><?php echo $item['top'] ?></div>
          <span><?php echo $item['bottom'] ?></span>
        </div>
      </div>

      <?php } ?>

    </div>

  </div>
</section>