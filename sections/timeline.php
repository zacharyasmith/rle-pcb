<?php
function checkbox($checked)
{
  $status = $checked ? 'checked="checked"' : '';
  return <<<EOC
  <div class="ui checkbox">
  <input type="checkbox" disabled="disabled" $status>
  <label></label>
  </div>
EOC;
}
?>
<a id="timeline" class="anchor move"></a>
<div class="ui vertical inverted stripe segment">
  <div class="ui container">
    <h1 class="ui inverted dividing header">Project Timeline</h1>
    <table class="ui very basic inverted celled collapsing table">
      <thead>
        <tr>
          <th><i class="ui inverted grey ellipsis horizontal icon"></i> / <i class="ui green checkmark icon"></i></th>
          <th>Deliverable</th>
          <th>Projection</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <i class="ui large green checkmark icon"></i>
          </td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Sep 15<sup>th</sup>, 2017</td>
        </tr>
        <tr>
          <td>
            <i class="ui large inverted grey ellipsis horizontal icon"></i>
          </td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Sep 15<sup>th</sup>, 2017</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
