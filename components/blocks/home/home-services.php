<?php $block = get_field('home-services_content') ?>

<section class="home-services">
  <div class="container container--wide">
    <div class="row">

      <div class="home-services__left col-lg-6">
        <h3 class="home-headline"><?php echo $block['title'] ?></h3>
        <p class="home-under-headline"><?php echo $block['under-title'] ?></p>

        <ul>
          <?php $list = $block['list'];
          foreach($list as $item) { ?>

          <li>
            <div class="content">
              <span class="text"><?php echo $item['top'] ?></span>
              <?php if (!empty($item['bottom'])) { ?>
              <span class="note"><?php echo $item['bottom'] ?></span>
              <?php } ?>
            </div>
          </li>

          <?php } ?>

        </ul>

        <div class="buttons">
          <a class="btn btn--pink scroll-to-form"
            href="<?php echo $block['button-one']['link'] ?>"><?php echo $block['button-one']['text'] ?></a>
          <a class="btn btn--gray"
            href="<?php echo $block['button-two']['link'] ?>"><?php echo $block['button-two']['text'] ?></a>
        </div>
      </div>

      <div class="home-services__right col-lg-6">
        <img src="<?php echo $block['image'] ?>" alt="image">
      </div>

    </div>
  </div>
</section>