<section class="about-social">
  <div class="container-fluid">
    <h2 class="headline align-center"><?php echo get_field('about_social-title') ?></h2>
    <span class="under-headline align-center"><?php echo get_field('about_social-text') ?></span>

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