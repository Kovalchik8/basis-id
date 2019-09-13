class BasisMailChimp {
  constructor() {
    this.submit_btn = $('.modal-download .btn')
    this.email_input = $('.modal-download input[type=email]')
    this.events()
  }

  events() {
    this.submit_btn.on('click', this.submit_btn_onClick.bind(this))
  }

  submit_btn_onClick(e) {
    var email = this.email_input.val()
    if (!email.length || email.match(/\S+@\S+\.\S+/) == null) {
      this.email_input.addClass('error')
      e.preventDefault()
    } else {
      window.open(this.submit_btn.attr('data-document'), '_blank')
    }
  }
}

export default BasisMailChimp
