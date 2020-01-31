<?php $block = get_field('about_new-cards') ?>

<section class="about-cards" id="about-cards">
  <div class="container container--wide">
    <div class="row">
      <div class="col-xl-9">

        <div class="list">
          <?php $list = $block['cards'];
          foreach($list as $item) { ?>

          <div class="item">
            <span class="num"><?php echo $item['number'] ?></span>
            <span class="text"><?php echo $item['text'] ?></span>
          </div>

          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</section>