<?php


$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("loanpaymentsystem", $con);

$loanID = $_POST['loanID'];
$amount = $_POST['amount'];



$sql2 =" UPDATE loanregistrar SET amount = '$amount' WHERE loanID = '$loanID' ";

 $result2 = mysql_query($sql2);

             $principle = $amount;
            $Interest = ($principle*20)/100;
            $AmountToBePaid = $principle + $Interest;


 $sql5 =" UPDATE loanregistrar SET AmountToBePaid = '$AmountToBePaid' WHERE loanID = '$loanID' ";

             $result5 = mysql_query($sql5);


            $sql6 =" UPDATE loanregistrar SET Interest = '$Interest' WHERE loanID = '$loanID' ";

             $result6 = mysql_query($sql6);


             $balance = $AmountToBePaid;

             $sql7 =" UPDATE loanregistrar SET Balance = '$balance' WHERE loanID = '$loanID' ";

              $result6 = mysql_query($sql7);


    //$sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }

  //"successfully sent the reg data.";
  header("Location:success.html");


mysql_close($con);
?>
