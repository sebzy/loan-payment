<?php


$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("loanpaymentsystem", $con);

$PersonID = $_POST['PersonID'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$date = $_POST['date'];




    $sql = "INSERT INTO loanregistrar (PersonID, name, amount,date ) VALUES ('$PersonID', '$name', '$amount','$date')";

    //$sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

  //"successfully sent the reg data.";
  header("Location:success.html");

            $principle = $amount;
            $Interest = ($principle*20)/100;
            $AmountToBePaid = $principle + $Interest;


$sql2 = "Select  loanID FROM loanregistrar where PersonID ='$PersonID' ";
    $row = mysql_fetch_assoc(mysql_query($sql2, $con));

        $loanID = $row['loanID'];


            $sql5 =" UPDATE loanregistrar SET AmountToBePaid = '$AmountToBePaid' WHERE loanID = '$loanID' ";

             $result5 = mysql_query($sql5);


            $sql6 =" UPDATE loanregistrar SET Interest = '$Interest' WHERE loanID = '$loanID' ";

             $result6 = mysql_query($sql6);


             $balance = $AmountToBePaid;

             $sql7 =" UPDATE loanregistrar SET Balance = '$balance' WHERE loanID = '$loanID' ";

              $result6 = mysql_query($sql7);

            
            header("Location:success.html");

/*  if (!mysql_query($sql2,$con))
    {
    die('Error: ' . mysql_error());
    }
  echo "successfully sent the reg data.";*/



mysql_close($con);
?>
