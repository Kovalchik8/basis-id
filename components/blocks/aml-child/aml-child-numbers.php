<?php $block = get_field('aml-child_numbers'); ?>
<section class="home-numbers">
  <div class="container container--wide">

    <div class="row list">

      <?php $list = $block['list'];
      foreach($list as $key => $item) { ?>

      <div class="<?php if ($key == 0 && count($list) < 4) echo 'offset-lg-' . count($list) % 4 ?>  col-lg-4 col-md-6">
        <div class="item" style="background-color: <?php echo $item['bg'] ?>">
          <div class="number" style="color: <?php echo $item['color'] ?>"><?php echo $item['top'] ?></div>
          <span><?php echo $item['bottom'] ?></span>
        </div>
      </div>

      <?php } ?>

    </div>

  </div>
</section>