class Sticky {
  constructor() {
    this.sticky_item = $('.sticky-form')
    this.events()
  }
  events() {
    if ($(window).outerWidth() > 1200 && this.sticky_item.length)
      $(window).on('load', this.init_sticky_item.bind(this))
  }

  init_sticky_item() {
    var sticky_item_params = {
        top: this.sticky_item.offset().top,
        right:
          $(window).width() -
          (this.sticky_item.offset().left + this.sticky_item.outerWidth()),
        height: this.sticky_item.outerHeight(),
        width: this.sticky_item.outerWidth()
      },
      bottom_margin = $('.form').offset().top

    $(window).scroll(e => {
      // sticky element at top
      if ($(window).scrollTop() > sticky_item_params.top - 100) {
        this.sticky_item.css({
          position: 'fixed',
          top: '100px',
          right: sticky_item_params.right + 'px',
          width: sticky_item_params.width
        })
      } else if (
        $(window).scrollTop() <=
        bottom_margin - sticky_item_params.height - 100
      ) {
        this.sticky_item.css({
          position: 'relative',
          top: 0,
          right: 0
        })
      }
      // sticky element at bottom
      if (
        $(window).scrollTop() >
        bottom_margin - (sticky_item_params.height + 130)
      ) {
        this.sticky_item.addClass('hidden')
      } else if (
        $(window).scrollTop() <
        bottom_margin - (sticky_item_params.height + 130)
      ) {
        this.sticky_item.removeClass('hidden')
      }
    })
  }
}

export default Sticky
