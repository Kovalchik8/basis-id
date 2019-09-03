<section class="partners">
  <div class="container">
    <h3 class="headline headline--padding"><?php echo get_field('home-partners-title') ?></h3>
  </div>

  <div class="container-fluid partners__list">
    <div class="row">

      <?php $partners = get_field('home-partners');

      foreach($partners as $partner) { ?>

      <div class="col-lg-3 col-6 partners__item">
        <div class="overlay">
          <p>
            <?php echo $partner['text'] ?>
          </p>
        </div>
        <img class="img-fluid" src="<?php echo $partner['image'] ?>" alt="partner">
      </div>

      <?php } ?>

    </div>

  </div>
</section>