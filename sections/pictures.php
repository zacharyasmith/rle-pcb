<a id="pictures" class="anchor move"></a>
<div class="ui vertical stripe segment" style="overflow:auto;">
  <div class="ui container">
    <h1 class="ui dividing header">
      Pictures
    </h1>
    <?php
      $imgs = array(
        array('img/gallery/RLE_Original_Testing_Method.jpg','RLE original testing method'),
        array('img/gallery/SeaLion_Design1.JPG','Initial design of test fixture.'),
        array('img/gallery/SeaLion_Design2.JPG','Fixture holding 3 LD5200 PCBs.'),
        array('img/gallery/LD2100_CAD_render.jpg','3D model of the LD2100 PCB.'),
        array('img/gallery/Backplane_Demo.JPG','3D print of section of backplane.'),
        array('img/gallery/Backplane_CAD.PNG','3D model of backplane.'),
        array('img/gallery/SeaLion_Design3.PNG','SeaLion fixture design by first semester.')
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
