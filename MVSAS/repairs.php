<?php
  session_start();
  $servicenumber = $_SESSION['servicenumber'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repairs</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="_container">
      <h1>REPAIRS</h1>
      <form class="repair_data" action="engine/repair_data.php" method="post">
        <input type="text" name="servicenumber" value=<?php echo $servicenumber; ?>><br>
        <input type="text" name="mileage" placeholder="mileage"><br>
      <table>
        <tr>
          <th>Car Part</th>
          <th>Fix?</th>
          <th>Remarks</th>
        </tr>
        <tr>
          <td>Bonnet/Hood</td>
          <td><input type="checkbox" name="bonnet"></td>
          <td>
            <select class="car_condition" name="bonnetc">
              <option value='good'>Good Condition</option>
              <option value='repair'>Repair</option>
              <option value='replace'>Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Bumper</td>
          <td><input type="checkbox" name="bumper"></td>
          <td>
            <select class="car_condition" name="bumperc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Doors</td>
          <td><input type="checkbox" name="doors"></td>
          <td>
            <select class="car_condition" name="doorsc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Windscreen</td>
          <td><input type="checkbox" name="windscreen"></td>
          <td>
            <select class="car_condition" name="windscreenc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Door Windows</td>
          <td><input type="checkbox" name="doorwindows"></td>
          <td>
            <select class="car_condition" name="doorwindowsc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alternator</td>
          <td><input type="checkbox" name="alternator"></td>
          <td>
            <select class="car_condition" name="alternatorc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Battery</td>
          <td><input type="checkbox" name="battery"></td>
          <td>
            <select class="car_condition" name="batteryc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Ignition System</td>
          <td><input type="checkbox" name="ignitions"></td>
          <td>
            <select class="car_condition" name="ignitionsc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Lights</td>
          <td><input type="checkbox" name="lights"></td>
          <td>
            <select class="car_condition" name="lightsc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Indicator Lights</td>
          <td><input type="checkbox" name="indicator"></td>
          <td>
            <select class="car_condition" name="indicatorc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Braking System</td>
          <td><input type="checkbox" name="brakings"></td>
          <td>
            <select class="car_condition" name="brakingsc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Engine</td>
          <td><input type="checkbox" name="engine"></td>
          <td>
            <select class="car_condition" name="enginec">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Oil</td>
          <td><input type="checkbox" name="oil"></td>
          <td>
            <select class="car_condition" name="oilc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Air Filter</td>
          <td><input type="checkbox" name="airfilter"></td>
          <td>
            <select class="car_condition" name="airfilterc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Gearbox</td>
          <td><input type="checkbox" name="gearbox"></td>
          <td>
            <select class="car_condition" name="gearboxc">
              <option value="good">Good Condition</option>
              <option value="repair">Repair</option>
              <option value="replace">Replace</option>
            </select>
          </td>
        </tr>
      </table>
        <button type="submit" name="submit">submit</button>
      </form>
    </div>
  </body>
</html>
