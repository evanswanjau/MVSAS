<?php
  session_start();
  $servicenumber = $_SESSION['servicenumber'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirm Repairs</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <div class="leaving">
      <h1>Checkout</h1>
    <form action="" method="post">
      <input type="text" name="mileage" value="<?php echo $servicenumber; ?>">
    </form>
    <?php
    Require 'database/connection.php';

    function checkboxValue($value){
      if ($value == 0) {
        $type = 'hidden';
      }else {
        $type = 'checkbox';
      }
      return($type);
    }
    function checkboxCondition($value){
      if ($value == 0) {
        $condition = 'Good Condition';
      }else {
        $condition = '';
      }
      return($condition);
    }

    $sql = "SELECT * FROM service WHERE servicenumber = '".$servicenumber."'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $bonnet = $row['bonnet'];
              $bonnetv = checkboxValue($row['bonnet']);
              $bonnetc = checkboxCondition($row['bonnet']);

              $bumper = $row['bumper'];
              $bumperv = checkboxValue($row['bumper']);
              $bumperc = checkboxCondition($row['bumper']);

              $doors = $row['doors'];
              $doorsv = checkboxValue($row['doors']);
              $doorsc = checkboxCondition($row['doors']);

              $windscreen = $row['windscreen'];
              $windscreenv = checkboxValue($row['windscreen']);
              $windscreenc = checkboxCondition($row['windscreen']);

              $doorwindows = $row['doorwindows'];
              $doorwindowsv = checkboxValue($row['doorwindows']);
              $doorwindowsc = checkboxCondition($row['doorwindows']);

              $alternator = $row['alternator'];
              $alternatorv = checkboxValue($row['alternator']);
              $alternatorc = checkboxCondition($row['alternator']);

              $battery = $row['battery'];
              $batteryv = checkboxValue($row['battery']);
              $batteryc = checkboxCondition($row['battery']);

              $ignitions = $row['ignitions'];
              $ignitionsv = checkboxValue($row['ignitions']);
              $ignitionsc = checkboxCondition($row['ignitions']);

              $lights = $row['lights'];
              $lightsv = checkboxValue($row['lights']);
              $lightsc = checkboxCondition($row['lights']);

              $indicator = $row['indicator'];
              $indicatorv = checkboxValue($row['indicator']);
              $indicatorc = checkboxCondition($row['indicator']);

              $brakings = $row['brakings'];
              $brakingsv = checkboxValue($row['brakings']);
              $brakingsc = checkboxCondition($row['brakings']);

              $engine = $row['engine'];
              $enginev = checkboxValue($row['engine']);
              $enginec = checkboxCondition($row['engine']);

              $oil = $row['oil'];
              $oilv = checkboxValue($row['oil']);
              $oilc = checkboxCondition($row['oil']);

              $airfilter = $row['airfilter'];
              $airfilterv = checkboxValue($row['airfilter']);
              $airfilterc = checkboxCondition($row['airfilter']);

              $gearbox = $row['gearbox'];
              $gearboxv = checkboxValue($row['gearbox']);
              $gearboxc = checkboxCondition($row['gearbox']);

              $mileage = $row['mileage'];
              $nextservice = $mileage + 50000;
              $servicenumber = $row['servicenumber'];

              echo '
              <div class="Checkout">
                <table>
                  <tr>
                    <th>Car Part</th>
                    <th>Fixed?</th>
                  <tr>
                  <tr>
                    <td>Bonnet</td>
                    <td><input type=' . $bonnetv . ' disabled="disabled" checked="checked">'. $bonnetc.'</td>
                  </tr>
                  <tr>
                    <td>Bumper</td>
                    <td><input type=' . $bumperv . ' disabled="disabled" checked="checked">'. $bumperc .'</td>
                  </tr>
                  <tr>
                    <td>Doors</td>
                    <td><input type=' . $doorsv . ' disabled="disabled" checked="checked">'. $doorsc .'</td>
                  </tr>
                  <tr>
                    <td>Windscreen</td>
                    <td><input type=' . $windscreenv . ' disabled="disabled" checked="checked">'. $windscreenc .'</td>
                  </tr>
                  <tr>
                    <td>Door Windows</td>
                    <td><input type=' . $doorwindowsv . ' disabled="disabled" checked="checked">'. $doorwindowsc .'</td>
                  </tr>
                  <tr>
                    <td>Alternator</td>
                    <td><input type=' . $alternatorv . ' disabled="disabled" checked="checked">'. $alternatorc .'</td>
                  </tr>
                  <tr>
                    <td>Battery</td>
                    <td><input type=' . $batteryv . ' disabled="disabled" checked="checked">'. $batteryc .'</td>
                  </tr>
                  <tr>
                    <td>Ignition System</td>
                    <td><input type=' . $ignitionsv . ' disabled="disabled" checked="checked">'. $ignitionsc .'</td>
                  </tr>
                  <tr>
                    <td>Lights</td>
                    <td><input type=' . $lightsv . ' disabled="disabled" checked="checked">'. $lightsc .'</td>
                  </tr>
                  <tr>
                    <td>Indicator</td>
                    <td><input type=' . $indicatorv . ' disabled="disabled" checked="checked">'. $indicatorc .'</td>
                  </tr>
                  <tr>
                    <td>Braking System</td>
                    <td><input type=' . $brakingsv . ' disabled="disabled" checked="checked">'. $brakingsc .'</td>
                  </tr>
                  <tr>
                    <td>Engine</td>
                    <td><input type=' . $enginev . ' disabled="disabled" checked="checked">'. $enginec .'</td>
                  </tr>
                  <tr>
                    <td>Oil</td>
                    <td><input type=' . $oilv . ' disabled="disabled" checked="checked">'. $oilc .'</td>
                  </tr>
                  <tr>
                    <td>Air Filter</td>
                    <td><input type=' . $airfilterv . ' disabled="disabled" checked="checked">'. $airfilterc .'</td>
                  </tr>
                  <tr>
                    <td>Gear Box</td>
                    <td><input type=' . $gearboxv . ' disabled="disabled" checked="checked">'. $gearboxc .'</td>
                  </tr>
                </table>
                <p style="padding:1%;"><b>Next Service: <b>' . $nextservice .'</p>
              </div>';
            }
          }
    ?>
    <button onClick="window.print()">Download</button><br>
    <a href="../index.html">Back to home</a>
    </div>
  </body>
</html>
