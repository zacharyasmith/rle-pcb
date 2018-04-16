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
        array('img/gallery/LD2100_CAD_render.jpg','3D model of the LD2100 PCB.'),
        array('img/gallery/Backplane_Demo.JPG','3D print of section of backplane.'),
        array('img/gallery/Backplane_CAD.PNG','3D model of backplane.'),
        array('img/gallery/SeaLion_Design3.PNG','SeaLion fixture design by first semester.'),
        array('img/gallery/Frame_1.JPG', 'Development of frame.'),
        array('img/gallery/PhotoresistorMountConcept.PNG', 'Photoresistor mount case concept.'),
        array('img/gallery/ECE_Team_Pic.jpg', 'ECE Team.'),
        array('img/gallery/EDays.jpg', 'Team at EDays.')
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
      <div class="content">
        <img class="ui fluid image">
      </div>
    </div>
  </div>
</div>
