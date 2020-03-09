<?php $block = get_field('aml-child_about') ?>
<section class="page-aml-child_about" style="background-color: <?php echo $block['color'] ?>">
  <div class="container container--wide">
    <h2 class="headline headline--blue-line"><?php echo $block['title'] ?></h2>
    <div class="row content">
      <div class="col-md-6">
        <?php echo $block['left'] ?>
      </div>
      <div class="col-md-6">
        <?php echo $block['right'] ?>
      </div>
    </div>
  </div>
</section>