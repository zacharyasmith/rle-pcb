<a id="pictures" class="anchor move"></a>
<div class="ui vertical stripe segment" style="overflow:auto;">
  <div class="ui container">
    <h1 class="ui dividing header">
      Pictures
    </h1>
    <?php
      $imgs = array(
        array('img/gallery/RLE_Original_Testing_Method.jpg','RLE Original Testing Method')
      );
    ?>
    <?php foreach ($imgs as $img): ?>
      <div class="ui left floated _img_popup segment">
        <img class="ui medium image" src="<?= $img[0] ?>" alt="<?= $img[1] ?>">
        <p><?= $img[1] ?></p>
      </div>
    <?php endforeach; ?>
    <div class="ui modal" id="_img_popup">
      <i class="close icon"></i>
      <div class="header"></div>
      <div class="image content">
        <img class="ui fluid image">
      </div>
    </div>
  </div>
</div>
