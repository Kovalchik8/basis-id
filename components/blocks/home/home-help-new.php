<?php $block = get_field('home-help-new_content')  ?>

<section class="home-help-new">
  <div class="container container--wide">
    <h3 class="home-headline"><?php echo $block['title']; ?></h3>

    <div class="row list">

      <?php $list = $block['list'];
      foreach($list as $item) { ?>

      <div class="col-lg-3 col-6">
        <div class="item">
          <img class="img-fluid" src="<?php echo $item['icon'] ?>" alt="icon">
          <div class="item__title"><?php echo $item['top'] ?></div>
          <p><?php echo $item['bottom'] ?></p>
        </div>
      </div>

      <?php } ?>

    </div>

    <div class="align-center">
      <a class="btn btn--blue" href="<?php echo $block['button']['link'] ?>"><?php echo $block['button']['text'] ?></a>
    </div>
  </div>
</section>