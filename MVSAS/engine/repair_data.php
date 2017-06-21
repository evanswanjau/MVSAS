<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repair Form</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body bgcolor = "#2d2d2d">
    <h1 style="color:white; text-align:center; padding:5%;">Checkout</h1>
    <div class="repair_container">
      <div class="subtle">
      <table>
        <tr>
          <th>Car Part</th>
          <th>Fees</th>
        </tr>
        <?php
          session_start();
          Require 'database/connection.php';

          if (isset($_POST['submit'])) {
            $errors = array();
            $serviceFee = 1000;

            $servicenumber = $_SESSION['servicenumber'];

        //Function to find service pay
            function PriceRange($condition){

              if ($condition == 'good') {
                $price = 0;
              }elseif ($condition == 'repair') {
                $price = 5500;
              }elseif ($condition == 'replace') {
                $price = 8800;
              }

              return($price);
            }
        ////////////////END OF FUNCTION///////////////

            if (isset($_POST['bonnet'])) {
              $bonnetp = PriceRange($_POST['bonnetc']);
              echo "<tr><td>Bonnet/Hood</td><td>" . $bonnetp . " Sh</td></tr>";
            }else {
              $bonnetp = 0;
            }

            if (isset($_POST['bumper'])) {
              $bumperp = PriceRange($_POST['bumperc']);
              echo "<tr><td>Bumper</td><td>" . $bumperp . " Sh</td></tr>";
            }else {
              $bumperp = 0;
            }

            if (isset($_POST['doors'])) {
              $doorsp = PriceRange($_POST['doorsc']);
              echo "<tr><td>Doors</td><td>" . $doorsp . " Sh</td></tr>";
            }else {
              $doorsp = 0;
            }

            if (isset($_POST['windscreen'])) {
              $windscreenp = PriceRange($_POST['windscreenc']);
              echo "<tr><td>Windscreen</td><td>" . $windscreenp . " Sh</td></tr>";
            }else {
              $windscreenp = 0;
            }

            if (isset($_POST['doorwindows'])) {
              $doorwindowsp = PriceRange($_POST['doorwindowsc']);
              echo "<tr><td>Door Windows</td><td>" . $doorwindowsp . " Sh</td></tr>";
            }else {
              $doorwindowsp = 0;
            }

            if (isset($_POST['alternator'])) {
              $alternatorp = PriceRange($_POST['alternatorc']);
              echo "<tr><td>Alternator</td><td>" . $alternatorp . " Sh</td></tr>";
            }else {
              $alternatorp = 0;
            }

            if (isset($_POST['battery'])) {
              $batteryp = PriceRange($_POST['batteryc']);
              echo "<tr><td>Battery</td><td>" . $batteryp . " Sh</td></tr>";
            }else {
              $batteryp = 0;
            }

            if (isset($_POST['ignitions'])) {
              $ignitionsp = PriceRange($_POST['ignitionsc']);
              echo "<tr><td>Ignition System</td><td>" . $ignitionsp . " Sh</td></tr>";
            }else {
              $ignitionsp = 0;
            }

            if (isset($_POST['lights'])) {
              $lightsp = PriceRange($_POST['lightsc']);
              echo "<tr><td>Light System</td><td>" . $lightsp . " Sh</td></tr>";
            }else {
              $lightsp = 0;
            }

            if (isset($_POST['indicator'])) {
              $indicatorp = PriceRange($_POST['indicatorc']);
              echo "<tr><td>Indicator Lights</td><td>" . $indicatorp . " Sh</td></tr>";
            }else {
              $indicatorp = 0;
            }

            if (isset($_POST['brakings'])) {
              $brakingsp = PriceRange($_POST['brakingsc']);
              echo "<tr><td>Braking System</td><td>" . $brakingsp . " Sh</td></tr>";
            }else {
              $brakingsp = 0;
            }

            if (isset($_POST['engine'])) {
              $enginep = PriceRange($_POST['enginec']);
              echo "<tr><td>Engine</td><td>" . $enginep . " Sh</td></tr>";
            }else {
              $enginep = 0;
            }

            if (isset($_POST['oil'])) {
              $oilp = PriceRange($_POST['oilc']);
              echo "<tr><td>Oil</td><td>" . $oilp . " Sh</td></tr>";
            }else {
              $oilp = 0;
            }

            if (isset($_POST['airfilter'])) {
              $airfilterp = PriceRange($_POST['airfilterc']);
              echo "<tr><td>Air Filter</td><td>" . $airfilterp . " Sh</td></tr>";
            }else {
              $airfilterp = 0;
            }

            if (isset($_POST['gearbox'])) {
              $gearboxp = PriceRange($_POST['gearboxc']);
              echo "<tr><td>Gear Box</td><td>" . $gearboxp . " Sh</td></tr>";
            }else {
              $gearboxp = 0;
            }

            if($_POST['mileage'] != ''){
              if (is_numeric($_POST['mileage']) == True){
                $mileage = intval($_POST['mileage']);
              }else {
                $errors[] = "<div class='error'>You need to enter numerical values for mileage</div>";
              }

            }else{
              $errors[] = "<div class='error'>You need to enter the car mileage</div>";
            }

            $Total = $bonnetp + $bumperp + $doorsp + $windscreenp + $doorwindowsp + $alternatorp + $batteryp + $ignitionsp + $lightsp + $indicatorp + $brakingsp + $enginep + $oilp + $airfilterp + $gearboxp + $serviceFee;
            echo "<tr><td><b>Service Fee</b></td><td><b>" . $serviceFee . " Sh</b></td></tr>";
            echo "<tr><td><b>Total Fees</b></td><td><b>" . $Total . " Sh</b></td></tr>";
            echo "</table>";

            //Check whether service number exists
            $servicenumbersql = "SELECT servicenumber FROM service WHERE servicenumber = '".$servicenumber."'";
            $result = $conn->query($servicenumbersql);

            if ($result->num_rows == 1) {
              $errors[] = '<div class="error">Sorry that service number already exists</div>';
            }


            if ($errors == []) {
              $sql = "INSERT INTO service (bonnet, bumper, doors, windscreen, doorwindows, alternator, battery, ignitions, lights, indicator, brakings, engine, oil, airfilter, gearbox, mileage, servicenumber, servicefee, total)
              VALUES ('$bonnetp', '$bumperp', '$doorsp', '$windscreenp', '$doorwindowsp', '$alternatorp', '$batteryp', '$ignitionsp', '$lightsp', '$indicatorp', '$brakingsp', '$enginep', '$oilp', '$airfilterp', '$gearboxp', '$mileage', '$servicenumber', '$serviceFee', '$Total')";

              if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Car repairs have been registered successfully</div>";
                echo "<div class='red'><a href='checkpoint.php'>Proceed</a></div>";
              }else{
                echo "error";
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }else {
              foreach ($errors as $error) {
                echo $error;
              }
              header('refresh:2; url=../repairs.php');
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
