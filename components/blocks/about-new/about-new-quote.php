<?php $block = get_field('about_new-quote') ?>

<section class="about-quote" id="about-quote">
  <div class="container container--wide">
    <div class="row">
      <div class="col-xl-9">
        <div class="about-quote__quote">

          <div class="left">
            <div class="photo" style="background-image: url(<?php echo $block['img'] ?>)"></div>
            <div class="text">
              <span class="name"><?php echo $block['name'] ?></span>
              <span class="position"><?php echo $block['position'] ?></span>
            </div>
          </div>

          <div class="right">
            <?php $list = $block['quote'];
            foreach($list as $item) { ?>
            <p><?php echo $item['paragraph'] ?></p>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>