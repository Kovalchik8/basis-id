<section class="section-tabs section-tabs--product product">

  <div class="container product__tabs">
    <ul class="nav section-tabs__tabs" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab"
          aria-controls="pills-first" aria-selected="true"><?php echo get_field('product_first-name') ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab"
          aria-controls="pills-second" aria-selected="false"><?php echo get_field('product_second-name') ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab"
          aria-controls="pills-third" aria-selected="false"><?php echo get_field('product_third-name') ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-forth-tab" data-toggle="pill" href="#pills-forth" role="tab"
          aria-controls="pills-forth" aria-selected="false"><?php echo get_field('product_forth-name') ?></a>
      </li>
    </ul>
  </div>

  <div class="tab-content" id="pills-tabContent">

    <?php $pill_first = get_field('product_first-content'); ?>

    <div class="tab-pan bg-blue-light product__first-pan" id="pills-first" role="tabpanel"
      aria-labelledby="pills-home-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <h2 class="headline headline--blue-line"><?php echo $pill_first['title'] ?></h2>
            <span class="tab-pan__desc">
              <?php echo $pill_first['under-title'] ?>
            </span>

            <div class="list">

              <?php $list = $pill_first['list'];
              foreach($list as $item) { ?>

              <div class="list__item">
                <img src="<?php echo $item['image'] ?>" alt="icon">
                <div class="list__text">
                  <h3 class="headline"><?php echo $item['title'] ?></h3>
                  <span><?php echo $item['text'] ?></span>
                </div>
              </div>

              <?php } ?>

            </div>

          </div>

          <div class="col-md-6 align-center-768 img-90proc-768">
            <picture>
              <img srcset="<?php echo $pill_first['image'] ?> 1920w, <?php echo $pill_first['image-retina'] ?> 3840w"
                class="img-fluid">
            </picture>
          </div>

        </div>

        <div class="cards row">

          <?php $cards = $pill_first['cards'];
          foreach($cards as $card) { ?>

          <div class="col-lg-4">
            <div class="cards__item">
              <img src="<?php echo $card['image'] ?>" alt="card">
              <h3 class="headline"><?php echo $card['title'] ?>
              </h3>
              <?php echo $card['content'] ?>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>

    </div>

    <?php $pill_second = get_field('product_second-content'); 
      $pill_second_one = $pill_second['block-1'];
      $pill_second_two = $pill_second['block-2'];
    ?>

    <div class="tab-pan product__second-pan" id="pills-second" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="container">
        <h2 class="headline headline--blue-line"><?php echo $pill_second_one['title'] ?></h2>
        <div class="row list">

          <?php $list = $pill_second_one['list'];
          foreach($list as $item) { ?>

          <div class="list__item list__item--<?php echo $item['color'] ?> col-lg-3 col-md-6">
            <?php echo $item['text'] ?>
          </div>

          <?php } ?>

        </div>

        <div class="row">
          <div class="offset-md-1 col-md-10">
            <div class="call-to-action">
              <span>Don't hesitate! We are here to help. </span>
              <button class="btn btn--pink scroll-to-form">Ask an expert</button>
            </div>
          </div>
        </div>

        <div class="row bottom">
          <div class="col-md-6">
            <h3 class="headline"><?php echo $pill_second_two['title'] ?>
            </h3>
            <div class="tab-pan__desc">
              <?php echo $pill_second_two['under-title'] ?>
            </div>
            <?php echo $pill_second_two['list'] ?>
          </div>
          <div class="col-md-6 align-center-768 img-90proc-768">
            <picture>
              <img
                srcset="<?php echo $pill_second_two['image'] ?> 1920w, <?php echo $pill_second_two['image-retina'] ?> 3840w"
                class="img-fluid">
            </picture>
          </div>
        </div>

      </div>
    </div>

    <?php $pill_third= get_field('product_third-content');  ?>

    <div class="tab-pan bg-blue-light product__third-pan" id="pills-third" role="tabpanel"
      aria-labelledby="pills-third-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="headline headline--blue-line"><?php echo $pill_third['title'] ?></h2>
            <div class="tab-pan__desc">
              <?php echo $pill_third['under-title'] ?>
            </div>
            <div class="gray-note">
              <?php echo $pill_third['note'] ?>
            </div>

            <div class="bottom">
              <?php $bottom = $pill_third['bottom-1'] ?>
              <div class="bottom__item">
                <h3 class="headline"><?php echo $bottom['title'] ?></h3>
                <span class="under-headline"><?php echo $bottom['text'] ?></span>
                <?php echo $bottom['list'] ?>
              </div>
              <?php $bottom = $pill_third['bottom-2'] ?>
              <div class="bottom__item">
                <h3 class="headline"><?php echo $bottom['title'] ?></h3>
                <span class="under-headline"><?php echo $bottom['text'] ?></span>
                <?php echo $bottom['list'] ?>
              </div>
            </div>

          </div>
          <div class="col-md-6 align-center-768 img-90proc-768">
            <picture>
              <img srcset="<?php echo $pill_third['image'] ?> 1920w, <?php echo $pill_third['image-retina'] ?> 3840w"
                class="img-fluid">
            </picture>
          </div>
        </div>
      </div>
    </div>

    <?php $pill_forth = get_field('product_forth-content'); ?>

    <div class="tab-pan product__forth-pan" id="pills-forth" role="tabpanel" aria-labelledby="pills-forth-tab">

      <div class="container-fluid email align-center">
        <?php $form = $pill_forth['form']; ?>
        <div class="email__content">
          <h3 class="headline headline--white"><?php echo $form['title'] ?></h3>
          <form>
            <input type="email" name="email" placeholder="<?php echo $form['placeholder'] ?>" required>
            <button type="submit" class="btn btn--no-radius btn--pink"><?php echo $form['button-text'] ?></button>
          </form>
        </div>
      </div>

      <div class="cards">
        <div class="container">
          <h3 class="headline align-center"><?php echo $pill_forth['title'] ?></h3>
          <div class="row cards__list">

            <?php $cards = $pill_forth['cards'];
            foreach($cards as $card) { ?>

            <div class="col-md-4">
              <div class="cards__item">
                <h3 class="headline headline--white headline--pink-line"><?php echo $card['title'] ?></h3>
                <p><?php echo $card['text'] ?></p>
              </div>
            </div>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>

  </div>

</section>