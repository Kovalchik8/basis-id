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
    this.calculate_faq_nav()

    $('[data-toggle="tooltip"]').tooltip({
      placement: $(window).outerWidth() > 767 ? 'right' : 'top',
      trigger: 'manual'
    })

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
      image_url = target.find('.thumb').css('background')
    this.modal.find('.modal-download__right').css({
      background: image_url
    })
    this.modal.find('.headline').text(target.find('.headline').text())
    this.modal.find('.modal-download__left p').text(target.find('p').text())
    this.modal.find('.btn').attr('href', target.attr('data-document'))
  }

  scroll_to_form_onClick(e) {
    e.preventDefault()
    if ($(window).outerWidth() < 991) $('.navbar-toggler').trigger('click') // hide menu on mobile
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
