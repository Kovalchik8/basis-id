<footer class="footer">
  <div class="container">

    <div class="row">

      <div class="col-md-2 footer__logo">
        <img src="<?php echo get_theme_file_uri('/img/logo-footer.svg') ?>" alt="logo">
      </div>

      <div class="col-md-2 col-6 footer__nav">
        <?php wp_nav_menu([ 
          'theme_location'  => 'footer_company'
        ]); ?>
      </div>

      <div class="col-md-2 col-6 footer__nav">
        <?php wp_nav_menu([ 
          'theme_location'  => 'footer_solution'
        ]); ?>
      </div>

      <div class="col-md-4 footer__nav footer__nav--social">

        <ul>
          <li><a>Follow us</a></li>

          <?php $menu_object = wp_get_nav_menu_object(5);
            $menu_items = get_field('footer_social', $menu_object);

          foreach ($menu_items as $item) { ?>
          <li><a href="<?php echo $item['link'] ?>"><?php echo $item['icon'] ?></a></li>
          <?php } ?>

        </ul>
      </div>

    </div> <!-- row -->

    <div class="footer__bottom">
      <div class="left">
        Copyright 2019 BASIS ID. All Rights Reserved.<br>
        BASIS ID uses 256-bit SSL encryption 100% of the time on every device.
      </div>
      <div class="right">
        <?php wp_nav_menu([ 
          'theme_location'  => 'footer_bottom'
        ]); ?>
      </div>
    </div>

  </div> <!-- container -->
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


<?php wp_footer(); ?>
</body>

</html>