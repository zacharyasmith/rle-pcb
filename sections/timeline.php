<a id="timeline" class="anchor move"></a>
<?php

// $timeline = [false]["lorem ipsum"]["Sep 15<sup>th</sup>, 2017"];
$timeline = array(
  array(true,"First revision of team charter.","Sep 15<sup>th</sup>, 2017"),
  array(true,"Final revision of team charter.","Oct 4<sup>th</sup>, 2017"),
  array(true,"October checkpoint with client.","Oct 31<sup>st</sup>, 2017"),
  array(true,"December checkpoint with client.","Dec 4<sup>th</sup>, 2017"),
  array(true,"Present semester one progress report.","Dec 6<sup>th</sup>, 2017"),
  array(true,"February checkpoint with client.","Feb 2<sup>nd</sup>, 2018"),
  array(true,"March checkpoint with client.","Mar 9<sup>th</sup>, 2018"),
  array(true,"E-Days presentation. (Automated PCB places 3rd.)","Apr 12<sup>th</sup>, 2018"),
  array(true,"Delivery of PCB tester.","May 2018")
);
?>
<div class="ui vertical inverted stripe segment">
  <div class="ui container">
    <h1 class="ui inverted dividing header">Project Timeline</h1>
    <table class="ui very basic inverted celled table">
      <thead>
        <tr>
          <th class="center aligned"><i class="ui inverted grey ellipsis horizontal icon"></i> / <i class="ui green checkmark icon"></i></th>
          <th>Deliverable</th>
          <th>Projection</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($timeline as $item): ?>
          <tr>
            <td class="center aligned">
              <i class="ui large <?= $item[0] ? "green checkmark" : "inverted grey ellipsis horizontal" ?> icon"></i>
            </td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
