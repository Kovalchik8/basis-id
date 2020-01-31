<?php $block = get_field('home-hero-new_content') ?>

<div class="home-top">
  <div class="container container--wide">
    <div class="row">
      <div class="col-lg-7 home-top__left">
        <h1 class="title title--line"><?php echo $block['title']; ?></h1>
        <p><?php echo $block['under-title']; ?></p>
      </div>

      <div class="col-lg-5 home-top__right">
        <div class="slider-progress">
          <div class="inner"></div>
        </div>

        <?php $slider = $block['slider']; ?>
        <div class="slider">
          <?php foreach($slider as $key => $item) { ?>
          <div class="item">
            <div class="item__photo-wrapper">
              <img class="item__photo" src="<?php echo $item['image'] ?>" alt="slide">
            </div>
            <img class="item__tooltip" src="<?php echo $item['tooltip'] ?>" alt="tooltip">
          </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <div class="home-top__bottom">
      <div class="note"><?php echo $block['partners']['text']; ?></div>

      <div class="list">

        <?php $list = $block['partners']['list'];
        foreach($list as $item) { ?>

        <div class="item" data-toggle='tooltip' data-original-title="<?php echo $item['hover']; ?>">
          <img src="<?php echo $item['logo']; ?>" alt="icon">
        </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>

<script>
// slick slider
var slick_slider = $('.home-top .slider'),
  progress_bar = $('.slider-progress .inner'),
  timeout_next_slide

if (slick_slider.length) {
  // on slider init
  slick_slider.on('init', function(slick) {
    current_slide_process(slick_slider.find('.slick-active'))
  })

  // after first slider image is loaded
  $('.slider .item:first-child .item__photo').one('load', () => {

    // init slider
    slick_slider.slick({
      dots: true,
      arrows: false,
      lazyLoad: 'ondemand'
    })

    // On before slide change
    slick_slider.on('beforeChange', () => {
      progress_bar.stop().css('width', '0')
      if (timeout_next_slide) clearTimeout(timeout_next_slide)
      $('.item__tooltip').removeClass('visible')
      $('.item__photo').removeClass('sharp')
    })

    // On after slide change
    slick_slider.on('afterChange', () => {
      current_slide_process(slick_slider.find('.slick-active'))
    })

  }).each(function() {
    if (this.complete) $(this).trigger('load');
  })

  // current slide process
  function current_slide_process(slide) {
    slide.find('.item__photo').addClass('sharp')

    progress_bar.animate({
      width: '100%'
    }, 2000, 'linear', () => {
      slide.find('.item__tooltip').addClass('visible')
      timeout_next_slide = setTimeout(() => {
        slick_slider.slick('slickNext')
      }, 3000)
    })
  }

}
</script>