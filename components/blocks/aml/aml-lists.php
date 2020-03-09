<?php $block = get_field('aml_lists') ?>
<section class="page-aml_lists">
  <div class="container container--wide">

    <h3 class="home-headline"><?php echo $block['title'] ?></h3>
    <p class="home-under-headline">
      <?php echo $block['under-title'] ?>
    </p>

    <div class="lists row">
      <?php $list = $block['list'];
      foreach($list as $item) { ?>

      <div class="col-lg-4">
        <div class="lists_item">
          <div class="content">
            <h3 class="headline"><?php echo $item['title'] ?></h3>
            <ul>
              <?php $points = $item['points'];
              foreach($points as $point) { ?>
              <li><?php echo $point['point'] ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>

  </div>
</section>