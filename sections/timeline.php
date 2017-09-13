<a id="timeline" class="anchor move"></a>
<?php

// $timeline = [false]["lorem ipsum"]["Sep 15<sup>th</sup>, 2017"];
$timeline = array(
  array(false,"Vision cast and develop team charter.","Sep 15<sup>th</sup>, 2017"),
  array(false,"Develop mechanical build plan.","Oct 15<sup>th</sup>, 2017"),
  array(false,"Develop electrical build plan.","Oct 15<sup>th</sup>, 2017"),
  array(false,"Build mockup and debug before final build.","Dec 3<sup>rd</sup>, 2017"),
  array(false,"Present semester one progress report.","Dec 6<sup>th</sup>-7<sup>th</sup>, 2017")
);
?>
<div class="ui vertical inverted stripe segment">
  <div class="ui container">
    <h1 class="ui inverted dividing header">Project Timeline</h1>
    <table class="ui very basic inverted celled collapsing table">
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
