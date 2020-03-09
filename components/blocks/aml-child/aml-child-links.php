<?php $block = get_field('aml-child_links') ?>
<section class="page-aml-child_links" style="background-color: <?php echo $block['color'] ?>">
  <div class="container container--wide">
    <h2 class="headline"><?php echo $block['title'] ?></h2>

    <div class="list">

      <?php $list = $block['list'];
      foreach($list as $item) { ?>

      <div class="item" style="background-color: <?php echo $item['color'] ?>">
        <img src="<?php echo $item['img'] ?>" alt="icon">
        <div class="name"><?php echo $item['name'] ?></div>
        <a href="<?php echo $item['link'] ?>">Learn more</a>
      </div>

      <?php } ?>

    </div>
  </div>
</section>