<section class="help">
  <div class="container">
    <h3 class="headline headline--padding"><?php echo get_field('home_help-title') ?>
    </h3>

    <div class="row help__list">


      <?php $cards = get_field('home_help-list'); 

      foreach($cards as $card) { ?>

      <div class="col-lg-3 col-md-6 align-center">
        <div class="help__item">
          <div class="align-center">
            <img src="<?php echo $card['image'] ?>" alt="icon">
          </div>
          <div class="help__name"><?php echo $card['headline'] ?></div>
          <p><?php echo $card['text'] ?></p>

          <?php if (!empty($card['link'])) { ?>
          <a href="<?php echo $card['link']; ?>">Learn more</a>
          <?php } ?>

        </div>
      </div>

      <?php } ?>

    </div>

</section>