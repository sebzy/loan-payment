<?php


$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("loanpaymentsystem", $con);

$loanID = $_POST['loanID'];









                $sql2 = "Select amount, AmountToBePaid, Interest, Balance, TotalPayments FROM loanregistrar where loanID ='$loanID' ";
    $row = mysql_fetch_assoc(mysql_query($sql2, $con));

        $amount = $row['amount'];
        $AmountToBePaid = $row['AmountToBePaid'];
        $Interest = $row['Interest'];
        $Balance = $row['Balance'];
        $TotalPayments = $row['TotalPayments'];

//amount
/* ******************************
 $sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
            $row = mysql_fetch_assoc(mysql_query($sql2, $con));
           $amount = $row['amount'];

*/
         $Interest = $Interest*2;
         $AmountToBePaid = $amount + $Interest;
         $Balance = $AmountToBePaid - $TotalPayments;



         $sql6 =" UPDATE loanregistrar SET AmountToBePaid = '$AmountToBePaid', Interest = '$Interest', Balance = '$Balance' WHERE loanID = '$loanID' ";

             $result6 = mysql_query($sql6);
/* **********************************
//amount to b paid
            $sql2 = "Select  AmountToBePaid FROM loanregistrar where loanID ='$loanID' ";
            $row = mysql_fetch_assoc(mysql_query($sql2, $con));
            $AmountToBePaid = $row['AmountToBePaid'];


 $AmountToBePaid = $amount + $Interest;
*/

/* ************************************
echo  $AmountToBePaid;
         $sql6 =" UPDATE loanregistrar SET AmountToBePaid = '$AmountToBePaid' WHERE loanID = '$loanID' ";

             $result6 = mysql_query($sql6);
*/


//balance
/* ***************************************
 $sql2 = "Select  Balance FROM loanregistrar where loanID ='$loanID' ";
            $row = mysql_fetch_assoc(mysql_query($sql2, $con));
           $Balance = $row['Balance'];
*/
/* ***************************************
 $sql2 = "Select  TotalPayments FROM loanregistrar where loanID ='$loanID' ";
            $row = mysql_fetch_assoc(mysql_query($sql2, $con));


           $TotalPayments = $row['TotalPayments'];

            $Balance = $AmountToBePaid - $TotalPayments;
*/

/* ***************************************
$sql6 =" UPDATE loanregistrar SET Balance = '$Balance' WHERE loanID = '$loanID' ";

             $result6 = mysql_query($sql6);


*/


    if ($AmountToBePaid == $TotalPayments ) {
                  $update1 = " UPDATE loanregistrar SET status = 'CLEARED' WHERE loanID = '$loanID' ";
                  mysql_query($update1);
                }else{
                  $update = " UPDATE loanregistrar SET status = 'INTEREST DOUBLED' WHERE loanID = '$loanID'  ";
                  mysql_query($update);
                }



    //$sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }

   header("Location:success.html");


mysql_close($con);
?>
