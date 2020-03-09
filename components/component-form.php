<!-- get visitor country by ip -->
<?php function ip_visitor_country() {

  $client  = $_SERVER['HTTP_CLIENT_IP'];
  $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = $_SERVER['REMOTE_ADDR'];
  $country  = '';

  if( filter_var($client, FILTER_VALIDATE_IP) ) {
    $ip = $client;
  }
  elseif( filter_var($forward, FILTER_VALIDATE_IP) ) {
    $ip = $forward;
  } else {
    $ip = $remote;
  }

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ip);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $ip_data_in = curl_exec($ch); // string
  curl_close($ch);

  $ip_data = json_decode($ip_data_in, true);
  $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

  if($ip_data && $ip_data['geoplugin_countryName'] != null)
    $country = $ip_data['geoplugin_countryName'];

  return $country;
} ?>

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

          if ($name == 'phone') {
            $visitor_country = ip_visitor_country();
            $input .= "<div data-country='{$visitor_country}' class='form-control country'><div class='country__selected'><span class='country__placeholder'>Country</span></div><ul></ul></div>";
          } 

        } else if ($type == 'select') {

          $options = $field['options'];

          $input = "<div class='select-wrapper'>";
          $input .= "<select name='{$name}' class='form-control' >";
          $input .= "<option disabled selected>{$placeholder}</option>";
          foreach($options as $option) {
            $input .= "<option>{$option['option']}</option>";
          }
          $input .= "</select></div>";
          
        } else if ($type == 'textarea') {
          $input = "<textarea data-required='{$required[0]}' name='{$name}' class='form-control' rows='5' placeholder='{$placeholder}'></textarea>";
        } ?>

        <div class="form-group <?php echo $name ?>">
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