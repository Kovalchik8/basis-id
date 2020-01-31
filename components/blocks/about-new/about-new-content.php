<?php $block = get_field('About_new_content') ?>

<section class="about-content" id="about-content">
  <div class="container container--wide">
    <div class="row">

      <?php $testimonials = $block['testimonials'] ?>
      <div class="col-xl-9 about-content__item about-content__testimonials">
        <h3 class="headline headline--blue-line"><?php echo $testimonials['title'] ?></h3>
        <div class="about-content__slider">

          <?php $list = $testimonials['slider'];
          foreach($list as $item) { ?>

          <div class="item">
            <div class="content">
              <p><?php echo $item['text'] ?></p>
              <img src="<?php echo $item['img'] ?>" alt="client">
            </div>
          </div>

          <?php } ?>

        </div>
      </div>


      <?php $benefits = $block['benefits'] ?>
      <div class="col-xl-9 about-content__item about-content__benefits">
        <h3 class="headline headline--blue-line ">Benefits of working with us</h3>
        <div class="list">

          <?php foreach($benefits as $item) { ?>

          <div class="item">
            <img src="<?php echo $item['image'] ?>" alt="icon">
            <div class="item__text">
              <div class="name"><?php echo $item['title'] ?></div>
              <p><?php echo $item['text'] ?></p>
            </div>
          </div>

          <?php } ?>

        </div>
      </div>

      <?php $team = $block['team'] ?>
      <div class="col-xl-9 about-content__item about-content__team">
        <h3 class="headline headline--blue-line "><?php echo $team['title'] ?></h3>
        <img class="img-fluid" src="<?php echo $team['img'] ?>" alt="team">
      </div>

      <?php $contacts = $block['contacts'] ?>
      <div class="col-xl-9 about-content__item about-content__contacts">
        <h3 class="headline headline--blue-line "><?php echo $contacts['title'] ?></h3>
        <div class="list">

          <?php $list = $contacts['list'];
          foreach($list as $item) { ?>

          <div class="item">
            <img class="img-fluid" src="<?php echo $item['image'] ?>" alt="contact">
            <div class="name"><?php echo $item['name'] ?></div>
            <div class="phone"><?php echo $item['phone'] ?></div>
          </div>

          <?php } ?>

        </div>
      </div>

      <?php $clients = $block['clients'] ?>
      <div class="col-xl-9 about-content__item about-content__clients">
        <h3 class="headline headline--blue-line ">Our clients</h3>
        <div class="list">

          <?php foreach($clients as $item) { ?>
          <div class="item">
            <img class="img-fluid" src="<?php echo $item ?>" alt="client">
          </div>
          <?php } ?>

        </div>
      </div>

    </div>
  </div>
</section>

<script>
// init slider
$('.about-content__slider').slick({
  dots: true,
  arrows: false,
  adaptiveHeight: true
})
</script>