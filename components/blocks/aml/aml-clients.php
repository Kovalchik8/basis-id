<?php $block = get_field('aml_clients') ?>
<section class="aml-clients">
  <div class="container container--wide">
    <h3 class="home-headline"><?php echo $block['title'] ?></h3>
    <div class="list">

      <?php $list = $block['clients'];
      foreach($list as $item) { ?>
      <div class="item">
        <img class="img-fluid" src="<?php echo $item ?>" alt="client">
      </div>
      <?php } ?>

    </div>
  </div>
</section>