<section class="about-press">
  <div class="container-fluid">
    <h2 class="headline align-center"><?php echo get_field('about_press-title') ?></h2>

    <div class="about-press__list">

      <?php $press = get_field('about_press-list');
      foreach($press as $item) { ?>

      <div class="article">
        <div class="article__overlay"><a href="<?php echo $item['link'] ?>">Read article</a></div>
        <img class="img-fluid" src="<?php echo $item['image'] ?>" alt="article">
      </div>

      <?php } ?>

    </div>
  </div>
</section>