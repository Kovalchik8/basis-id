<?php $block = get_field('home-process_content');  ?>

<section class="home-process" style="background-color: #FFE3EA;">
  <div class="container container--wide">
    <div class="row">

      <div class="home-process__left col-lg-6">
        <img class="img-fluid" src="<?php echo $block['image']; ?>" alt="image">
      </div>

      <div class="home-process__right col-lg-6">

        <h3 class="home-headline"><?php echo $block['title']; ?></h3>

        <div class="desc">
          <p><?php echo $block['under-title']['one']; ?></p>
          <p><?php echo $block['under-title']['two']; ?></p>
        </div>

        <ul>
          <?php $list = $block['list'];
          foreach($list as $item) { ?>

          <li>
            <div class="content">
              <span class="text"><?php echo $item['main']; ?></span>
              <span class="note"><?php echo $item['secondary']; ?></span>
            </div>
          </li>

          <?php } ?>
        </ul>

        <a class="btn" href="<?php echo $block['button']['link'] ?>"><?php echo $block['button']['text'] ?></a>

      </div>

    </div>
  </div>
</section>