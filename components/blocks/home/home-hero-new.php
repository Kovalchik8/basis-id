<?php $block = get_field('home-hero-new_content') ?>


<div class="home-top">
  <div class="container container--wide">
    <div class="row">
      <div class="col-lg-7 home-top__left">
        <h1 class="title title--line"><?php echo $block['title']; ?></h1>
        <p><?php echo $block['under-title']; ?></p>
      </div>

      <div class="col-lg-5 home-top__right">
        <div class="slider-progress">
          <div class="inner"></div>
        </div>

        <?php $slider = $block['slider']; ?>
        <div class="slider">
          <?php foreach($slider as $item) { ?>
          <div class="item">
            <div class="item__photo-wrapper">
              <img class="item__photo" src="<?php echo $item['image'] ?>" alt="slide">
            </div>
            <img class="item__tooltip" src="<?php echo $item['tooltip'] ?>" alt="">
          </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <div class="home-top__bottom">
      <div class="note"><?php echo $block['partners']['text']; ?></div>

      <div class="list">

        <?php $list = $block['partners']['list'];
        foreach($list as $item) { ?>

        <div class="item" data-toggle='tooltip' data-original-title="<?php echo $item['hover']; ?>">
          <img src="<?php echo $item['logo']; ?>" alt="icon">
        </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>