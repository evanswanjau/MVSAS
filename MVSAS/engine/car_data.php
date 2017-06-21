<?php
session_start();
Require 'database/connection.php';

if(isset($_POST['submit'])){
  $errors = array();

  if($_POST['firstname'] != ''){
    $firstname = $_POST['firstname'];
  }else {
    $errors[] = "<div class='error'>You have not entered your first name</div>";
  }

  if($_POST['secondname'] != ''){
    $secondname = $_POST['secondname'];
  }else {
    $errors[] = "<div class='error'>You have not entered your second name</div>";
  }

  if($_POST['phonenumber'] != ''){
    $phonenumber = $_POST['phonenumber'];
  }else {
    $errors[] = "<div class='error'>You have not entered your phone number</div>";
  }

  if($_POST['plate'] != ''){
    $plate = $_POST['plate'];
  }else {
    $errors[] = "<div class='error'>You have not entered your number plate</div>";
  }

  if($_POST['car_name'] != ''){
    $car_name = $_POST['car_name'];
  }else {
    $errors[] = "<div class='error'>You have not entered your car name</div>";
  }

  if($_POST['car_model'] != ''){
    $car_model = $_POST['car_model'];
  }else {
    $errors[] = "<div class='error'>You have not entered your car model</div>";
  }

  ////////////////////Create service number
  $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $shuffle = str_shuffle($string);

  $servicenumber = substr($shuffle, 0, strlen($string)/4);
  $_SESSION['servicenumber'] = $servicenumber;

  ///////////////////TimeStamp
  date_default_timezone_set('Africa/Nairobi');
  $date = date('Y-m-d');

  //////////Check if errors exists
  if(empty($errors) == True){
    $sql = "INSERT INTO registration (firstname, secondname, phonenumber, plate, car_name, car_model, servicenumber, date)
    VALUES ('$firstname', '$secondname', '$phonenumber', '$plate', '$car_name', '$car_model', '$servicenumber', '$date')";

    if ($conn->query($sql) === TRUE) {
      echo "<div class='success'>Car has been registered successfully</div>";
      header('refresh:2; url=../repairs.php');
    }else{
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }else{
    foreach ($errors as $error) {
      echo $error;
    }
  }
}
?>
