<?php


$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("loanpaymentsystem", $con);

$loanID = $_POST['loanID'];
$date = $_POST['date'];
$payment = $_POST['payment'];




    $sql = "INSERT INTO loandata (loanID,date ,payment ) VALUES ('$loanID','$date' ,  '$payment')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
//echo "successfully sent the data.";




$query = "SELECT COUNT(*) AS total, SUM(payment) AS total_payment FROM loandata WHERE loanID='$loanID'";

$result = mysql_query($query);
$values = mysql_fetch_assoc($result);

$num_payments = $values['total'];
$total_value_ofpayments = $values['total_payment'];
//echo "Number of Records Found # ".$num_payments;
//echo "Total Money ".$total_value_ofpayments;

//UPDATE THE TOTAL PAYMENTS
$sql2 =" UPDATE loanregistrar SET TotalPayments = '$total_value_ofpayments' WHERE loanID = '$loanID' ";

 $result2 = mysql_query($sql2);

//NUMBER OF PAYMENTS
$sql3 =" UPDATE loanregistrar SET NumberOfPayments = '$num_payments' WHERE loanID = '$loanID' ";

 $result3 = mysql_query($sql3);

// UPDATE BALANCE
$sql2 = "Select  AmountToBePaid FROM loanregistrar where loanID ='$loanID' ";
    $row = mysql_fetch_assoc(mysql_query($sql2, $con));

        $ATBP = $row['AmountToBePaid'];


$balance = $ATBP - $total_value_ofpayments;

$sql6 =" UPDATE loanregistrar SET Balance = '$balance' WHERE loanID = '$loanID' ";

 $result6 = mysql_query($sql6);

  header("Location:LoanSuccess.html");
/*
 $sql3 ="SELECT * FROM loanregistrar WHERE loanID = '$loanID' ";
 $result = mysql_query($sql3);
 //$row_users = mysql_fetch_array($sql3);

 while ($row_users = mysql_fetch_array($result)) {
     //output a row here
     if ($row_users['AmountToBePaid'] == $row_users['TotalPayments']) {
       $update1 = " UPDATE loanregistrar SET status = 'PAID' WHERE loanID = '$loanID' ";
       mysql_query($update1);
     }else{
       $update = " UPDATE loanregistrar SET status = 'NOT FULLY PAID' WHERE loanID = '$loanID'  ";
       mysql_query($update);
     }
 } */






  $sql3 = "Select  TotalPayments FROM loanregistrar WHERE loanID = '$loanID' ";
           $row1 = mysql_fetch_assoc(mysql_query($sql3, $con));

                $TP = $row1['TotalPayments'];

                if ($ATBP == $TP ) {
                  $update1 = " UPDATE loanregistrar SET status = 'CLEARED' WHERE loanID = '$loanID' ";
                  mysql_query($update1);
                }else{
                  $update = " UPDATE loanregistrar SET status = 'DEMANDED' WHERE loanID = '$loanID'  ";
                  mysql_query($update);
                }









mysql_close($con);
?>
