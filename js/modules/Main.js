class Main {
  constructor() {
    this.faq_nav = $('.faq .left')
    this.faq_nav_link = $('.faq .left__item a')
    this.learn_more_btn = $('.hero .buttons a')
    this.scroll_to_form = $('.scroll-to-form')
    this.tabs = $('.section-tabs__tabs')
    this.tabs_link = $('.section-tabs__tabs .nav-link')
    this.events()
  }

  events() {
    this.faq_nav_link.on('click', this.faq_nav_link_onClick)
    this.tabs_link.on('click', this.tab_link_onClick)
    this.learn_more_btn.on('click', this.learn_more_btn_onClick)
    this.scroll_to_form.on('click', this.scroll_to_form_onClick)
    $(window).on('load', this.window_onLoad.bind(this))
  }

  window_onLoad() {
    if (this.faq_nav.length && $(window).outerWidth() > 767) {
      var footer_top = $('.footer').offset().top
      var left_top = this.faq_nav.outerHeight()

      $(window).scroll(e => {
        $(window).scrollTop() > footer_top - (left_top + 79 + 150)
          ? this.faq_nav.addClass('left--absolute')
          : this.faq_nav.removeClass('left--absolute')
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
