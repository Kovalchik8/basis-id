<section class="more-features">
  <div class="container">
    <h3 class="headline align-center"><?php echo get_field('home_more-title') ?></h3>

    <div class="row more-features__list">

      <?php $more_list = get_field('home_more-list');
      foreach($more_list as $item) { ?>

      <div class="col-md-4 more-features__item">
        <h4 class="headline"><?php echo $item['title'] ?></h4>
        <p><?php echo $item['text'] ?>
        </p>
      </div>

      <?php } ?>

    </div>
  </div>

</section>