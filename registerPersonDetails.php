<?php


$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("loanpaymentsystem", $con);

$PersonID = $_POST['PersonID'];
$name = $_POST['name'];
$ResidenceLocation = $_POST['ResidenceLocation'];
$date = $_POST['date'];
$DOB = $_POST['DOB'];
$sex = $_POST['sex'];
$WorkStation = $_POST['WorkStation'];
$District = $_POST['District'];
$EmploymentNumber = $_POST['EmploymentNumber'];
$CurrentOccupation = $_POST['CurrentOccupation'];
$PhoneContact = $_POST['Phonecontact'];$PhoneContact = $_POST['Phonecontact'];
$PhoneContact = $_POST['Phonecontact'];
$NextOfKin = $_POST['NextOfKin'];
$ContactNextOfKin = $_POST['ContactNextOfKin'];




    $sql = "INSERT INTO persondetails (PersonID, name,ResidenceLocation,date, DOB,sex , WorkStation, District, EmploymentNumber, CurrentOccupation,PhoneContact, NextOfKin, ContactNextOfKin   )
    VALUES ('$PersonID', '$name', '$ResidenceLocation','$date','$DOB' ,'$sex' ,'$WorkStation' ,'$District' ,'$EmploymentNumber','$CurrentOccupation' ,'$PhoneContact' ,'$NextOfKin' , '$ContactNextOfKin')";

    //$sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

  //"successfully sent the reg data.";
  header("Location:success.html");


mysql_close($con);
?>
