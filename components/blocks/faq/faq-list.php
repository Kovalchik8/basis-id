<?php $faq = get_field('faq_list-list'); ?>

<section class="faq">

  <div class="left">
    <ul class="left__list list-group" id="faq-nav">
      <li class="left__item left__item--head">
        <div class="left__wrapper">
          <span><?php echo get_field('faq_list-title-nav') ?></span>
        </div>
      </li>

      <?php foreach($faq as $key=>$item) { $key++; ?>

      <li class="left__item">
        <a href="#section-<?php echo $key ?>" class="list-group-item">
          <div class="left__wrapper">
            <span class="order"><?php echo $key ?></span>

            <?php if ($item['important']) { ?>
            <div class="left__label">
              <span><?php echo $item['nav_name']; ?></span>
              <span class="label-important">Important</span>
            </div>
            <?php } else { echo $item['nav_name']; } ?>

          </div>
        </a>
      </li>

      <?php } $key++; ?>

      <li class="left__item">
        <a href="#section-<?php echo $key ?>" class="list-group-item">
          <div class="left__wrapper">
            <span class="order"><?php echo $key ?></span>
            <?php echo get_field('faq_list-last')['title']; ?>
          </div>
        </a>
      </li>

    </ul>
  </div>

  <div class="right">
    <div class="right__top align-center">
      <div class="wrapper">

        <div class="note">
          <?php echo get_field('faq_list-text') ?></div>

        <div class="faq__object">
          <i class="fas fa-circle-notch fa-3x rotating"></i>
          <object type="text/html"
            data="https://europe-api.baasisid.com/auth/ui/key/65596335521167430000/multi?orig=https%3A%2F%2Fwww.baasisid.com&api_form_token=a7bfcd1b-f4a6-43d8-a119-a98de27165b6#/"
            width="100%" style="max-width:100%" height="750px" style="overflow:auto;">
          </object>
        </div>

      </div>
    </div>

    <div class="right__content points">
      <div class="wrapper">
        <h2 class="headline"><?php echo get_field('faq_list-title') ?></h2>

        <?php foreach($faq as $key=>$content) { $key++; ?>

        <div class="point" id="section-<?php echo $key ?>">
          <?php echo $content['content'] ?>
        </div>

        <?php } 
        
        $key++; 
        $last_point = get_field('faq_list-last')['content']; 
        $table = $last_point['table']; 
        $accordion = $last_point['accordion']; ?>

        <div class="point" id="section-<?php echo $key ?>">

          <h3 class="headline"><?php echo $key ?>. <?php echo get_field('faq_list-last')['title'] ?></h3>
          <?php echo $last_point['top_text']; ?>

          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Callback type</th>
                <th scope="col">Status values</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($table as $row) { ?>

              <tr>
                <th scope="row"><?php echo $row['number'] ?></th>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['status'] ?></td>
              </tr>

              <?php } ?>

            </tbody>
          </table>

          <h3 class="headline headline--callback"><?php echo $last_point['accordion_title'] ?></h3>

          <div class="accordion point__accordion" id="lastPointAccordion">

            <?php foreach($accordion as $key=>$card) { $key++; ?>

            <div class="card">
              <div class="card-header" id="heading<?php echo $key ?>">
                <h2 class="mb-0">
                  <button class="btn-link" type="button" data-toggle="collapse"
                    data-target="#collapse<?php echo $key ?>"
                    aria-expanded="<?php echo $key == 1 ? 'true' : 'false'  ?>"
                    aria-controls="collapse<?php echo $key ?>">
                    <span class="order"><?php echo $card['number'] ?></span>
                    <div class="accordion__wrapper">
                      <span> <?php echo $card['title'] ?></span>
                      <?php echo $card['status'] == 'Approved' ? '<span class="label label--green">Approved</span>' : '<span class="label label--pink">Declined</span>' ?>
                    </div>
                  </button>
                </h2>
              </div>

              <div id="collapse<?php echo $key ?>" class="collapse <?php if ($key == 1) echo 'show'; ?>"
                aria-labelledby="heading<?php echo $key ?>" data-parent="#lastPointAccordion">
                <div class="card-body">
                  <div class="point__code">
                    <pre><code class="plaintext">
<?php echo $card['content'] ?>
           </code></pre>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>

        </div> <!-- points -->

      </div>
    </div>
  </div>
</section>