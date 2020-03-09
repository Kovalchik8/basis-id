<?php $block = get_field('aml_pills'); $pills = $block['pills'] ?>
<div class="section-tabs section-tabs--product product">

  <div class="container container--tabs product__tabs">
    <ul class="nav section-tabs__tabs" id="pills-tab" role="tablist">
      <?php foreach($pills as $key => $item) { $key++; ?>
      <li class="nav-item">
        <a class="nav-link" id="pills-first-tab" data-toggle="pill" href="#pills-<?php echo $key ?>" role="tab"
          aria-controls="pills-<?php echo $key ?>" aria-selected="true"><?php echo $item['name'] ?></a>
      </li>
      <?php } ?>
    </ul>
  </div>

  <?php $numbers = $block['nums'] ?>
  <section class="home-numbers">
    <div class="container container--wide">

      <h3 class="home-headline"><?php echo $numbers['title'] ?></h3>
      <p class="home-under-headline">
        <?php echo $numbers['under-title'] ?>
      </p>

      <div class="row list">

        <?php $list = $numbers['cards'];
        foreach($list as $item) { ?>

        <div class="col-lg-3 col-md-6">
          <div class="item" style="background-color: <?php echo $item['bg'] ?>">
            <div class="number" style="color: <?php echo $item['num-color'] ?>"><?php echo $item['num'] ?></div>
            <span><?php echo $item['text'] ?></span>
          </div>
        </div>

        <?php } ?>

      </div>

    </div>
  </section>

  <section class="tab-content" id="pills-tabContent">

    <?php foreach($pills as $key => $item) { $key++; $content = $item['content'] ?>
    <div class="tab-pan" id="pills-<?php echo $key ?>" role="tabpanel">
      <div class="container container--wide">
        <div class="row">

          <div
            class="col-md-<?php echo $key == 3 ? '5' : '6' ?> center-on-768 <?php if ($key == 2) echo 'pl30-min-992' ?>">
            <h2 class="headline"><?php echo $content['title'] ?></h2>
            <span class="tab-pan__desc">
              <?php echo $content['under-title'] ?>
            </span>

            <ul class="tick-list">
              <?php $list = $content['list'];
              foreach($list as $item) { ?>
              <li>
                <div class="content">
                  <span class="text"><?php echo $item['item'] ?></span>
                </div>
              </li>
              <?php } ?>
            </ul>

            <?php $btn = $content['btn'] ?>
            <a href="<?php echo $btn['link'] ?>"
              class="btn btn--<?php echo $key == 3 ? 'blue' : 'pink' ?>"><?php echo $btn['text'] ?></a>
          </div>

          <div
            class="col-md-<?php echo $key == 3 ? '7 page-aml_map' : '6' ?> align-center-768 img-90proc-768 <?php echo $key != 2 ? 'pl25-min-992' : 'pr50-min-992 ' ?> ">
            <img src="<?php echo $content['img'] ?>" alt="img" class="img-fluid">
          </div>
        </div>

        <div class="page-aml_bottom-list">
          <?php $list = $content['bottom'];
          foreach($list as $item) { ?>
          <div class="item">
            <img src="<?php echo $item['img'] ?>" alt="icon">
            <span><?php echo $item['text'] ?></span>
          </div>
          <?php } ?>
        </div>

      </div>

    </div>
    <?php } ?>

  </section>

</div>