class Main {
  constructor() {
    this.events()
  }

  events() {
    $(window).scroll(this.window_onScroll)
  }

  window_onScroll(e) {
    $(window).scrollTop() > 0
      ? $('.header').addClass('header--scroll')
      : $('.header').removeClass('header--scroll')
  }
}

export default Main
