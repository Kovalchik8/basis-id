<?php $block = get_field('aml-child_services'); ?>
<section class="page-aml-child_services">
  <div class="container container--wide">

    <div class="row list">

      <?php 
      $columns = 12 / $block['columns'];
      $list = $block['list'];
      foreach($list as $key => $item) { ?>

      <div class="col-md-<?php echo $columns ?>">
        <div class="item" style="background-color: <?php echo $item['bg'] ?>">
          <img src="<?php echo $item['img'] ?>" alt="icon">
          <span><?php echo $item['bottom'] ?></span>
        </div>
      </div>

      <?php } ?>

    </div>

  </div>
</section>