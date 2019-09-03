<section class="advantages">
  <div class="container">
    <h3 class="headline headline--padding"><?php echo get_field('home_advantages-title') ?></h3>

    <div class="row advantages__list">

      <?php $advantages = get_field('home_advantages-list'); 
      foreach($advantages as $advantage) { ?>

      <div class="col-md-3 align-center">
        <div class="advantages__item">
          <img src="<?php echo $advantage['image'] ?>" alt="icon">
          <span><?php echo $advantage['text'] ?>
          </span>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>
</section>