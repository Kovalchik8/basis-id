class Mail {
  constructor() {
    this.submit_btn = $('.form button[type=submit]')
    this.events()
  }

  events() {
    this.submit_btn.on('click', this.submit_btn_OnClick.bind(this))
  }

  submit_btn_OnClick(e) {
    e.preventDefault()

    var form = this.submit_btn.closest('form')

    var data = {
      action: 'send_mail',
      name: form.find('input[name=name]').val(),
      email: form.find('input[name=email]').val(),
      phone: form.find('input[name=phone]').val(),
      company: form.find('input[name=company]').val(),
      message: form.find('textarea').val()
    }

    // validation
    if (data.email && !this.validate_email(data.email)) data.email = 'invalid'
    if (data.phone && !this.validate_phone(data.phone)) data.phone = 'invalid'

    // check inputs (might be invalid or empty)
    if (
      !data.name ||
      !data.email ||
      !data.phone ||
      !data.company ||
      data.email == 'invalid' ||
      data.phone == 'invalid'
    ) {
      this.check_input(form.find('input[name=name]'), data.name, true)
      this.check_input(form.find('input[name=email]'), data.email, true)
      this.check_input(form.find('input[name=phone]'), data.phone, true)
      this.check_input(form.find('input[name=company]'), data.company, true)

      this.animate_to_form()
      return
    }

    this.submit_btn.text('Sending...')

    $.post(basisData.admin_ajax, data, result => {
      setTimeout(() => {
        this.submit_btn.text(result)
        // clean all inputs
        if (result == 'Success') {
          form.find('input:not([type=submit])').each(function(index) {
            $(this)
              .val('')
              .removeClass('error')
              .tooltip('hide')
          })
          form.find('textarea').val('')
        }
        setTimeout(() => {
          this.submit_btn.text('Send your request')
        }, 3000)
      }, 2000)
    })
  }

  // check whether input isn't empty or invalid after submit
  check_input(input, input_value, required = false) {
    if ((required && !input_value) || input_value == 'invalid') {
      input
        .addClass('error')
        .attr(
          'data-original-title',
          `This field is ${input_value == 'invalid' ? 'invalid' : 'required'}`
        )
        .tooltip('show')
    } else {
      input.removeClass('error').tooltip('hide')
    }
  }

  // validator for email
  validate_email(email) {
    return email.match(/\S+@\S+\.\S+/) != null
  }

  // validator for phone
  validate_phone(number) {
    number = number.replace(/[\s\-\(\)]/g, '') // remove spaces, dashes
    return (
      number.match(/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/) !=
      null
    )
  }

  // animate to form
  animate_to_form() {
    $('html, body').animate(
      {
        scrollTop: $('.form form').offset().top - 175
      },
      500
    )
  }
}

export default Mail
