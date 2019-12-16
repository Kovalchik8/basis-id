<?php $block = get_field('home-cards_content') ?>

<section class="home-cards">
  <div class="container container--wide">

    <div class="row home-cards__list">

      <?php foreach($block as $item) { ?>

      <div class="col-lg-6">
        <div class="item" style="background-color: <?php echo $item['bg'] ?>">

          <div class="item__left">
            <h3><?php echo $item['title'] ?></h3>
            <p><?php echo $item['text'] ?></p>

            <a href="<?php echo $item['link'] ?>">Learn more</a>
          </div>

          <div class="item__right">
            <img src="<?php echo $item['image'] ?>" alt="image" class="img-fluid">
          </div>
        </div>
      </div>

      <?php } ?>

    </div>

  </div>

  </div>
</section>