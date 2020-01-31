<section class="about-social about-social--new">
  <div class="container">

    <div class="about-social__address">
      <div class="item">
        <h3 class="headline align-center"><?php echo get_field('about_social-title') ?></h3>
        <span class="under-headline align-center"><?php echo get_field('about_social-text') ?></span>
      </div>
      <div class="item">
        <h3 class="headline align-center"><?php echo get_field('about_social-title_2') ?></h3>
        <span class="under-headline align-center"><?php echo get_field('about_social-text_2') ?></span>
      </div>
    </div>

  </div>

  <div class="container-fluid">

    <div class="row about-social__list">
      <?php $social = get_field('about_social-list');
      $style = '<style>';
      foreach($social as $key=>$item) { 
        
      $key++;
      $style .= ".about-social__item:nth-child({$key}):hover i { color: {$item['color']} }\n"; ?>

      <a target="_blank" href="<?php echo $item['link'] ?>" class="col-md-3 col-6 about-social__item">
        <?php echo $item['icon'] ?>
      </a>

      <?php } $style .= '</style>'; ?>
    </div>

    <?php echo $style; ?>
  </div>

</section>