<section class="about-desc">
  <div class="container">
    <h2 class="headline"><?php echo get_field('about_desc-title') ?></h2>
    <p class="text"><?php echo get_field('about_desc-text') ?></p>

    <div class="about-desc__awards">

      <?php $awards = get_field('about_desc-awords');
      
      foreach($awards as $award) { ?>

      <div class="aword">
        <img class="img-fluid" src="<?php echo $award['image'] ?>" alt="aword">
      </div>

      <?php } ?>

    </div>

    <div class="about-desc__points">
      <div class="row">

        <?php $points = get_field('about_desc-points');
        foreach($points as $point) { ?>

        <div class="col-md-4 point">
          <h3 class="headline"><?php echo $point['title'] ?></h3>
          <p><?php echo $point['text'] ?></p>
        </div>

        <?php } ?>

        <div class="offset-md-1 col-md-10">
          <div class="call-to-action">
            <span>Don't hesitate! We are here to help. </span>
            <button class="btn btn--pink scroll-to-form">Ask an expert</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>