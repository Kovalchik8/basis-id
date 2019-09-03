<div class="documents__list container">

  <?php $documents = get_field('documents_list');
  foreach($documents as $document) { ?>

  <div class="item" data-document="<?php echo $document['document'] ?>">
    <div class="thumb" style="background: url('<?php echo $document['image'] ?>') top/cover no-repeat;">
    </div>
    <div class="details">
      <h2 class="headline"><?php echo $document['title'] ?></h2>
      <p><?php echo $document['text'] ?></p>
      <a data-toggle="modal" data-target="#downloadModal" href="" class="btn btn--pink">Download</a>
    </div>
  </div>

  <?php } ?>

</div>