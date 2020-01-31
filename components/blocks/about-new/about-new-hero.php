<?php $block = get_field('about_hero-new'); ?>

<div class="hero hero--about">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 hero__left">
        <h1 class="title title--with-text title--wave"><?php echo $block['title'] ?>
          <span><?php echo $block['under-title'] ?>
          </span></h1>
        <p><?php echo $block['desc'] ?>
        </p>
        <ul>
          <?php $list = $block['list'];
          foreach($list as $item) { ?>

          <li><?php echo $item['item'] ?></li>

          <?php } ?>
        </ul>
      </div>

      <?php $sticky = $block['sticky'] ?>
      <div class="col hero__right">
        <div class="sticky-form">
          <div class="sticky-form__content">
            <img src="<?php echo $sticky['img'] ?>" alt="photo">
            <div class="text"><?php echo $sticky['text'] ?></div>
            <form>
              <div class="field-wrapper">
                <label>Phone</label>
                <input type="tel" name="phone" placeholder="Type your Phone" required>
              </div>
              <button id="simple_mail" type="submit" class="btn"><?php echo $sticky['btn'] ?></button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>