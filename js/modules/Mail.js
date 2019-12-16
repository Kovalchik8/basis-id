class Mail {
  constructor() {
    this.submit_btn = $('.form button[type=submit]')
    this.submit_simple_btn = $('#simple_mail')
    this.submit_simple_text = this.submit_simple_btn.text()
    this.submit_btn_text = this.submit_btn.text()
    this.simple_subject = $('.email__content h3').text()
    this.is_email_sending = false
    this.events()
  }

  events() {
    this.submit_btn.on('click', this.submit_btn_OnClick.bind(this))
    this.submit_simple_btn.on(
      'click',
      this.submit_simple_btn_onClick.bind(this)
    )
  }

  submit_simple_btn_onClick(e) {
    e.preventDefault()
    if (this.is_email_sending) return

    var input = this.submit_simple_btn.closest('form').find('input[type=email]')
    var email = input.val()
    if (!email.length || !this.validate_email(email)) {
      input.addClass('error')
      return
    }

    var data = {
      action: 'send_simple_mail',
      subject: this.simple_subject,
      email: email
    }

    this.is_email_sending = true
    this.submit_simple_btn.text('Sending...')

    $.post(basisData.admin_ajax, data, result => {
      setTimeout(() => {
        this.submit_simple_btn.text(result)
        // clean all inputs
        if (result == 'Success') {
          input.val('').removeClass('error')
        }
        setTimeout(() => {
          this.submit_simple_btn.text(this.submit_simple_text)
          this.is_email_sending = false
        }, 3000)
      }, 2000)
    })
  }

  submit_btn_OnClick(e) {
    e.preventDefault()
    if (this.is_email_sending) return

    var form = this.submit_btn.closest('form'),
      form_input = [],
      form_select = [],
      form_textarea = []

    var data = {
      action: 'send_mail',
      fields: []
    }

    // all input data
    form.find('input:not([type=submit])').each(function(index) {
      form_input.push({
        obj: $(this),
        name: $(this).attr('name'),
        type: $(this).attr('type'),
        value: $(this).val(),
        required: $(this).attr('data-required')
      })
    })

    // all select data
    form.find('select').each(function(index) {
      form_select.push({
        name: $(this).attr('name'),
        value: $(this).val(),
        required: $(this).attr('data-required')
      })
    })

    // all textarea data
    form.find('textarea').each(function(index) {
      form_textarea.push({
        name: $(this).attr('name'),
        value: $(this).val(),
        required: $(this).attr('data-required')
      })
    })

    // check all inputs (can be invalid or empty)
    for (let input of form_input) {
      if (
        input.type == 'email' &&
        input.value &&
        !this.validate_email(input.value)
      )
        input.value = 'invalid'
      if (
        input.type == 'tel' &&
        input.value &&
        !this.validate_phone(input.value)
      )
        input.value = 'invalid'

      this.check_input(input.obj, input.value, input.required == 'required')
    }

    // check if inputs with error exist
    if (form.find('input.error').length) {
      this.animate_to_form()
      return
    }

    // get all form data for ajax call
    for (let input of form_input) {
      data.fields.push({
        name: input.name,
        value: input.value
      })
    }

    for (let select of form_select) {
      data.fields.push({
        name: select.name,
        value: select.value
      })
    }

    for (let textarea of form_textarea) {
      data.fields.push({
        name: textarea.name,
        value: textarea.value
      })
    }

    this.is_email_sending = true
    this.submit_btn.text('Sending...')

    $.post(basisData.admin_ajax, data, result => {
      setTimeout(() => {
        this.submit_btn.text(result)
        // clean all inputs
        if (result == 'Success') {
          form.find('input:not([type=submit])').each(function(index) {
            $(this).val('')
          })
          form.find('textarea').val('')
        }
        setTimeout(() => {
          this.submit_btn.text(this.submit_btn_text)
          this.is_email_sending = false
        }, 3000)
      }, 2000)
    })
  }

  // check if input isn't empty or invalid after submit
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
      number.match(/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){6,14}(\s*)?$/) !=
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
