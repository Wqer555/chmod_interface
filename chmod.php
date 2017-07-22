<?php
$a = ['or' => 400,
      'ow' => 200,
      'ox' => 100,
      'gr' => 40,
      'gw' => 20,
      'gx' => 10,
      'ar' => 4,
      'aw' => 2,
      'ax' => 1];
if(!empty($_GET)) {
  $mod = 0;
  foreach($a as $k => $e) {
    if(isset($_GET[$k])) {
      $mod += $e;
      $$k = ' checked';
    } else {
      $$k = '';
    }
  }
  $mod = str_pad($mod, 3, '0', STR_PAD_LEFT);
} else {
  $mod = '000';
  foreach(array_keys($a) as $k) {
    $$k = '';
  }
}
?>
<!doctype html>
<html>
  <head>
    <title>chmod</title>
  </head>
  <body>
    <form action="?" method="get">
      <table>
        <tr>
          <th></th>
          <th>Read</th>
          <th>Write</th>
          <th>Execute</th>
        </tr>
        <tr>
          <td>Owner</td>
          <td><input type="checkbox" name="or"<?php echo $or?>></td>
          <td><input type="checkbox" name="ow"<?php echo $ow?>></td>
          <td><input type="checkbox" name="ox"<?php echo $ox?>></td>
        </tr>
        <tr>
          <td>Group</td>
          <td><input type="checkbox" name="gr"<?php echo $gr?>></td>
          <td><input type="checkbox" name="gw"<?php echo $gw?>></td>
          <td><input type="checkbox" name="gx"<?php echo $gx?>></td>
        </tr>
        <tr>
          <td>All</td>
          <td><input type="checkbox" name="ar"<?php echo $ar?>></td>
          <td><input type="checkbox" name="aw"<?php echo $aw?>></td>
          <td><input type="checkbox" name="ax"<?php echo $ax?>></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
    </form>
    <p>Mod: <?php echo $mod ?></p>
  </body>
</html>
