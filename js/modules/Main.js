class Main {
  constructor() {
    this.faq_nav = $('.faq .left')
    this.faq_nav_link = $('.faq .left__item a')
    this.accordion_point = $('.point__accordion button')
    this.learn_more_btn = $('.hero .buttons a')
    this.scroll_to_form = $('.scroll-to-form')
    this.tabs = $('.section-tabs__tabs')
    this.tabs_link = $('.section-tabs__tabs .nav-link')
    this.modal_toggler = $('a[data-target="#downloadModal"]')
    this.modal = $('#downloadModal')
    this.faq_object_loader = $('.faq__object i')
    this.events()
  }

  events() {
    this.faq_nav_link.on('click', this.faq_nav_link_onClick)
    this.tabs_link.on('click', this.tab_link_onClick)
    this.learn_more_btn.on('click', this.learn_more_btn_onClick)
    this.scroll_to_form.on('click', this.scroll_to_form_onClick)
    this.modal_toggler.on('click', this.modal_toggler_onClick.bind(this))
    this.accordion_point.on('click', this.accordion_point_onClick.bind(this))
    $(window).on('load', this.window_onLoad.bind(this))
  }

  accordion_point_onClick(e) {
    setTimeout(() => {
      this.calculate_faq_nav()
    }, 400)
  }

  window_onLoad() {
    if (this.faq_object_loader.length) this.faq_object_loader.remove()

    this.calculate_faq_nav()

    $('.footer__nav li:first-child a').on('click', function(e) {
      e.preventDefault()
    })

    $('form [data-toggle="tooltip"]').tooltip({
      placement: $(window).outerWidth() > 767 ? 'right' : 'top',
      trigger: 'manual',
      template:
        '<div class="tooltip tooltip--form" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    $('.home-top [data-toggle="tooltip"]').tooltip({
      placement: 'top',
      trigger: 'hover',
      template:
        '<div class="tooltip tooltip--top" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    // slick slider
    var slick_slider = $('.home-top .slider'),
      progress_bar = $('.slider-progress .inner'),
      timeout_next_slide

    if (slick_slider.length) {
      // on slider init
      slick_slider.on('init', function(slick) {
        current_slide_process(slick_slider.find('.slick-active'))
      })

      // init slider
      slick_slider.slick({
        dots: true,
        arrows: false
      })

      // current slide process
      function current_slide_process(slide) {
        slide.find('.item__photo').addClass('sharp')

        progress_bar.animate({ width: '100%' }, 2000, 'linear', () => {
          slide.find('.item__tooltip').addClass('visible')
          timeout_next_slide = setTimeout(() => {
            slick_slider.slick('slickNext')
          }, 3000)
        })
      }

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
    }

    if ($(window).outerWidth() > 767 && this.tabs.length) {
      var tabs_top = this.tabs.offset().top
      $(window).scroll(e => {
        $(window).scrollTop() > tabs_top - 50
          ? this.tabs.addClass('section-tabs__tabs--sticky')
          : this.tabs.removeClass('section-tabs__tabs--sticky')
      })
    }
  }

  calculate_faq_nav() {
    if (this.faq_nav.length && $(window).outerWidth() > 767) {
      var footer_top = $('.footer').offset().top
      var nav_height = this.faq_nav.outerHeight()

      $(window).scrollTop() > footer_top - (nav_height + 79 + 150)
        ? this.faq_nav.addClass('left--absolute')
        : this.faq_nav.removeClass('left--absolute')

      $(window).scroll(e => {
        $(window).scrollTop() > footer_top - (nav_height + 79 + 150)
          ? this.faq_nav.addClass('left--absolute')
          : this.faq_nav.removeClass('left--absolute')
      })
    }
  }

  modal_toggler_onClick(e) {
    var target = $(e.target).closest('.item'),
      image_url = target.attr('data-modal-image')
        ? `url('${target.attr('data-modal-image')}')`
        : target.find('.thumb').css('background-image')

    this.modal.find('.modal-download__right').css({
      backgroundImage: image_url
    })

    this.modal
      .find('.headline')
      .text(
        target.attr('data-modal-title')
          ? target.attr('data-modal-title')
          : target.find('.headline').text()
      )

    this.modal
      .find('.modal-download__left .desc')
      .text(
        target.attr('data-modal-text')
          ? target.attr('data-modal-text')
          : target.find('p').text()
      )

    this.modal.find('.btn').attr('data-document', target.attr('data-document'))
  }

  scroll_to_form_onClick(e) {
    e.preventDefault()
    if ($(window).outerWidth() < 991 && $(e.target).hasClass('navbar__to-form'))
      $('.navbar-toggler').trigger('click') // hide menu on mobile
    $('html, body').animate(
      { scrollTop: $('section.form').offset().top - 80 },
      700
    )
  }

  learn_more_btn_onClick(e) {
    e.preventDefault()
    var next_block = $('.hero').next('section')
    $('html, body').animate({ scrollTop: $(next_block).offset().top - 80 }, 400)
  }

  faq_nav_link_onClick(e) {
    e.preventDefault()
    var hash = this.hash
    $('html, body').animate({ scrollTop: $(hash).offset().top - 90 }, 400)
  }

  tab_link_onClick(e) {
    e.preventDefault()
    var hash = this.hash
    $('html, body').animate({ scrollTop: $(hash).offset().top - 80 }, 400)
  }
}

export default Main
