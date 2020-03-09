<?php $block = get_field('aml-child_advantages') ?>
<section class="page-aml-child_advantages">
  <div class="container container--wide">
    <h2 class="headline"><?php echo $block['title'] ?></h2>

    <div class="list">

      <?php $list = $block['list'];
      foreach($list as $item) { ?>

      <div class="item">
        <div class="image">
          <img src="<?php echo $item['img'] ?>" alt="icon">
        </div>
        <div class="name"><?php echo $item['name'] ?></div>
        <div class="desc"><?php echo $item['desc'] ?></div>
      </div>

      <?php } ?>

    </div>

    <?php $button = $block['btn'] ?>
    <div class="button">
      <a href="#" class="btn btn--blue scroll-to-form"><?php echo $button['button_text'] ?></a>
    </div>

  </div>
</section>