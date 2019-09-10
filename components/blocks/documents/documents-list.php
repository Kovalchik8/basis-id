<div class="documents__list container">

  <?php $documents = get_field('documents_list');
  foreach($documents as $document) { $modal = $document['modal_content']; ?>

  <div class="item" data-modal-title="<?php echo $modal['title'] ?>" data-modal-text="<?php echo $modal['text'] ?>"
    data-modal-image="<?php echo $modal['image'] ?>" data-document="<?php echo $document['document'] ?>">
    <div class="thumb" style="background-image: url('<?php echo $document['image'] ?>')">
    </div>
    <div class="details">
      <h2 class="headline"><?php echo $document['title'] ?></h2>
      <p><?php echo $document['text'] ?></p>
      <a data-toggle="modal" data-target="#downloadModal" href="" class="btn btn--pink">Download</a>
    </div>
  </div>

  <?php } ?>

</div>