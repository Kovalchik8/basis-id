<?php $pills = get_field('compliance_pills-list') ?>

<section class="section-tabs">

  <div class="container-fluid">
    <ul class="nav section-tabs__tabs" id="pills-tab" role="tablist">

      <?php foreach($pills as $key=>$pill) { $key++; ?>

      <li class="nav-item">
        <a class="nav-link" id="pills-<?php echo $key ?>-tab" data-toggle="pill" href="#pills-<?php echo $key ?>"
          role="tab" aria-controls="pills-<?php echo $key ?>" aria-selected="true"><?php echo $pill['pill_name'] ?></a>
      </li>

      <?php } ?>

    </ul>
  </div>

  <div class="tab-content" id="pills-tabContent">

    <?php foreach($pills as $key=>$pill) {
      
    $content = $pill['pill_content'];
    $list = $content['list'];
  
    if($key++ % 2 == 0) { ?>

    <div class="tab-pan bg-<?php echo $pill['background'] ?> show active" id="pills-<?php echo $key ?>" role="tabpanel"
      aria-labelledby="pills-<?php echo $key ?>-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-9">

            <h2 class="headline headline--blue-line"><?php echo $content['title'] ?></h2>
            <span class="tab-pan__desc">
              <?php echo $content['subtitle'] ?>
            </span>

            <div class="tab-pan__mob-img">
              <img class="img-fluid" src="<?php echo $content['image'] ?>" alt="icon">
            </div>

            <div class="tab-pan__list">

              <?php foreach($list as $item) { ?>

              <div class="item">
                <h3 class="headline"><?php echo $item['title'] ?></h3>
                <p><?php echo $item['text'] ?> </p>
              </div>

              <?php } ?>
            </div>

          </div>

          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo $content['image'] ?>" alt="icon">
          </div>

        </div>
      </div>

    </div>

    <?php } else { ?>

    <div class="tab-pan tab-pan--reverse" id="pills-<?php echo $key ?>" role="tabpanel"
      aria-labelledby="pills-<?php echo $key ?>-tab">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo $content['image'] ?>" alt="icon">
          </div>

          <div class="col-md-9">

            <h2 class="headline headline--blue-line bg-<?php echo $pill['background'] ?>">
              <?php echo $content['title'] ?></h2>
            <span class="tab-pan__desc">
              <?php echo $content['subtitle'] ?>
            </span>

            <div class="tab-pan__mob-img">
              <img class="img-fluid" src="<?php echo $content['image'] ?>" alt="icon">
            </div>

            <div class="tab-pan__list">
              <?php foreach($list as $item) { ?>

              <div class="item">
                <h3 class="headline"><?php echo $item['title'] ?></h3>
                <p><?php echo $item['text'] ?> </p>
              </div>

              <?php } ?>
            </div>

            <?php if ($key == 2) { ?>
            <div class="call-to-action call-to-action--request-demo">
              <span>Read more about BASIS ID GDPR solution and how to make your business compliant</span>
              <button class="btn btn--pink scroll-to-form">Request a demo</button>
            </div>
            <?php } ?>

          </div>

        </div>
      </div>
    </div>

    <?php } } ?>

  </div>
</section>