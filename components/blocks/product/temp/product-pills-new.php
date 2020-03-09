<section class="section-tabs section-tabs--product product">

  <div class="container container--tabs product__tabs">
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
        <a class="nav-link" id="pills-forth-tab" data-toggle="pill" href="#pills-forth" role="tab"
          aria-controls="pills-forth" aria-selected="false"><?php echo get_field('product_third-name') ?></a>
      </li>
    </ul>
  </div>

  <div class="tab-content" id="pills-tabContent">

    <?php $pill_first = get_field('product_first-content'); ?>
    <div class="tab-pan bg-blue-light product__first-pan" id="pills-first" role="tabpanel"
      aria-labelledby="pills-home-tab">
      <div class="container container--wide">
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
              <div class="content">
                <h3 class="headline"><?php echo $card['title'] ?></h3>
                <?php echo $card['content'] ?>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>

        <?php $process = get_field('product_first-process'); ?>
        <div class="process">
          <div class="row">

            <div class="process__left col-md-6 img-90proc-768">
              <img srcset="<?php echo $process['image'] ?> 1920w, <?php echo $process['image-retina'] ?> 3840w"
                class="img-fluid">
            </div>

            <div class="process__right col-md-6">

              <h3 class="headline"><?php echo $process['title']; ?></h3>

              <div class="desc">
                <?php echo $process['under-title'] ?>
              </div>

              <ul>
                <?php $list = $process['list'];
                  foreach($list as $item) { ?>

                <li>
                  <div class="content">
                    <span class="text"><?php echo $item['main']; ?></span>
                    <span class="note"><?php echo $item['secondary']; ?></span>
                  </div>
                </li>

                <?php } ?>
              </ul>

            </div>

          </div>
        </div>

      </div>

    </div>

    <?php $pill_second = get_field('product_second-pill-new'); ?>
    <div class="tab-pan product__second-pan" id="pills-second" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="pill-second">

        <div class="container container--wide">
          <div class="row">

            <div class="pill-second__left col-md-6 img-90proc-768">
              <img srcset="<?php echo $pill_second['image'] ?> 1920w, <?php echo $pill_second['image-retina'] ?> 3840w"
                class="img-fluid">
            </div>

            <div class="pill-second__right col-md-6">

              <h3 class="headline"><?php echo $pill_second['title']; ?></h3>

              <div class="desc">
                <?php echo $pill_second['under-title'] ?>
              </div>

              <ul>
                <?php $list = $pill_second['list'];
                  foreach($list as $item) { ?>

                <li>
                  <div class="content">
                    <span class="text"><?php echo $item['main']; ?></span>
                    <span class="note"><?php echo $item['secondary']; ?></span>
                  </div>
                </li>

                <?php } ?>
              </ul>

              <a class="btn scroll-to-form"
                href="<?php echo $pill_second['button']['link'] ?>"><?php echo $pill_second['button']['text'] ?></a>

            </div>

          </div>

          <div class="row">
            <div class="offset-md-1 col-md-10">
              <div class="call-to-action">
                <span>Don't hesitate! We are here to help. </span>
                <button class="btn btn--pink scroll-to-form">Ask an expert</button>
              </div>
            </div>
          </div>

          <?php $pill_second_bottom = get_field('product_second-content')['block-1']; ?>
          <h2 class="headline headline--blue-line"><?php echo $pill_second_bottom ['title'] ?></h2>
          <div class="row list">

            <?php $list = $pill_second_bottom ['list'];
            foreach($list as $item) { ?>

            <div class="list__item list__item--<?php echo $item['color'] ?> col-lg-3 col-md-6">
              <?php echo $item['text'] ?>
            </div>

            <?php } ?>

          </div>

        </div>

      </div>
    </div>

    <?php $pill_third = get_field('product_forth-content'); ?>
    <div class="tab-pan product__forth-pan" id="pills-forth" role="tabpanel" aria-labelledby="pills-forth-tab">

      <div class="container-fluid email align-center">
        <?php $form = $pill_third['form']; ?>
        <div class="email__content">
          <h3 class="headline headline--white"><?php echo $form['title'] ?></h3>
          <form>
            <input type="email" name="email" placeholder="<?php echo $form['placeholder'] ?>" required>
            <button id="simple_mail" type="submit"
              class="btn btn--no-radius btn--pink"><?php echo $form['button-text'] ?></button>
          </form>
        </div>
      </div>

      <div class="cards">
        <div class="container container--wide">
          <h3 class="headline align-center"><?php echo $pill_third['title'] ?></h3>
          <div class="row cards__list">

            <?php $cards = $pill_third['cards'];
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