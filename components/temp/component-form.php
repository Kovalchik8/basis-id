<section class="form" id="contact-form">
  <div class="container-wrapper">
    <div class="container">
      <h3 class="headline align-center headline--white"><?php echo get_field('form_title', 'option') ?></h3>
      <span class="headline-text align-center"><?php echo get_field('form_under-title', 'option') ?></span>

      <form>
        <?php $fields = get_field('form_fields', 'option');

        foreach($fields as $field) {
          
        $type = $field['type'];
        $name = $field['name'];
        $placeholder = $field['placeholder'];
        $required = $field['required'];
          
        if ($type == 'input') {
          $input = "<input data-required='{$required[0]}' type='{$field['input_type']}' name='{$name}' class='form-control' placeholder='{$placeholder}' data-toggle='tooltip'>";

        } else if ($type == 'select') {

          $options = $field['options'];

          $input = "<select name='{$name}' class='form-control' >";
          $input .= "<option disabled selected>{$placeholder}</option>";
          foreach($options as $option) {
            $input .= "<option>{$option['option']}</option>";
          }
          $input .= "</select>";
          
        } else if ($type == 'textarea') {
          $input = "<textarea data-required='{$required[0]}' name='{$name}' class='form-control' rows='5' placeholder='{$placeholder}'></textarea>";
        }

        ?>

        <div class="form-group">
          <label><?php echo $field['label'] ?> <span><?php echo $required ? '*' : '' ?></span></label>
          <?php echo $input; ?>
        </div>

        <?php } ?>

        <button onclick="__gaTracker('send', 'event', 'form', 'submit')" type="submit"
          class="btn btn--pink"><?php echo get_field('form_submit-text', 'option') ?></button>
        <span class="note"><?php echo get_field('form_text-bottom', 'option') ?></span>
      </form>

    </div>
  </div>
</section>