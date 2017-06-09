<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loan Payment System</title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript">
function myFunction() {
    window.print();
}
 function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>
  </head>
  <body >
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
   <a class="navbar-brand" href="#">Loan Management System</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#myAlert" data-toggle="collapse">Wow</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">About</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation" >
            <ul class="nav nav-pills nav-stacked">
                 <li class="nav-item"><a class="nav-link" href="registerPersonDetails.html">Registar loan Applicant</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html">Registar loan</a></li>
                <li class="nav-item"><a class="nav-link" href="requestdetail.php">Request details</a></li>
                <li class="nav-item"><a class="nav-link" href="DisplayAllResults.php">Display registry data</a></li>
                <li class="nav-item"><a class="nav-link" href="loanPayment.html">Make loan payment</a></li>
                <li class="nav-item"><a class="nav-link" href="DisplayLoanPayments.html">Display loan payments</a></li>
                <li class="nav-item"><a class="nav-link" href="importexcelsheet.php">Import exel sheet</a></li>
                <li class="nav-item"><a class="nav-link" href="Edit.html">Edit</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
            </ul>
        </div>
        <!--/col-->

        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">

            </h1>


            <a id="features"></a>
            <br>
            <hr>
            <p class="lead">
                Tables displaying all registered loan accounts
            </p>
            <p><button type="submit" class="btn btn-primary"   onclick="window.print();" >Print out</button></p>

            <br>
            <hr>
            <!-- start form for validation -->
            <html>
<head></head>
<body>
  <html>
  <head></head>
  <body>

    <?php


    $con = mysql_connect("localhost","root", "");

        mysql_select_db("loanpaymentsystem", $con);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }


/*

$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('hrmwaitrose');

$query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection


*/
    $query = "SELECT * FROM loanregistrar  ";

    $results = mysql_query($query);
  //  $data2 = mysql_fetch_assoc($result);


        //$result2 = mysql_query($sql2);


      //  $data2 = mysql_query($sql2);

      //  $result2 = mysql_query($sql2, $con) or die(mysql_error());
   //$data = mysql_fetch_assoc($result);



        echo '

        <div class="col-lg-9 col-md-8">
                            <div class="table-responsive" style=" width: 125%;">
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Loan ID:</th>
                                            <th>Name:</th>
                                            <th>Amount:</th>
                                            <th>date:</th>
                                            <th>Interest:</th>
                                            <th>Amount to be paid:</th>
                                            <th>Total Payments:</th>
                                            <th>Number of Payments:</th>
                                            <th>Balance:</th>
                                            <th>Status:</th>
                                            </tr></thead>

                                     ';
  //while($data2 = mysql_fetch_array($result2)){ //Creates a loop to loop through results///</tr></thead><tbody>
  while($row = mysql_fetch_array($results)) {
echo '
<tr><td>'.$row['loanID'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['amount'].'</td>
<td>'.$row['date'].'</td>
<td>'.$row['Interest'].'</td>
<td>'.$row['AmountToBePaid'].'</td>
<td>'.$row['TotalPayments'].'</td>
<td>'.$row['NumberOfPayments'].'</td>
<td>'.$row['Balance'].'</td>
<td>'.$row['status'].'</td></tr>
';}
      echo'  </tbody>
                                </table>
                            </div>
                        </div>
  ';




/*
  $query = "SELECT  SUM(TotalPayments) AS totalpayments FROM loanregistrar";

  $result = mysql_query($query);
  $values = mysql_fetch_assoc($result);
  $TVOP = $values['totalpayments'];
  echo "<br><b>Total of loan payments:</b><br> ";
  echo $TVOP;
  echo "<br>";

  $query = "SELECT  SUM(Balance) AS balance FROM loanregistrar";

  $result = mysql_query($query);
  $values = mysql_fetch_assoc($result);
  $bal = $values['balance'];
  echo "<br><b>Total of loan balances:</b><br> ";
  echo $bal;  */

/*
   $sql2 = "Select  AmountToBePaid FROM loanregistrar ";
        $row = mysql_fetch_assoc(mysql_query($sql2, $con));

           $TATP = $row['AmountToBePaid'];

*/




  /*$query = "SELECT COUNT *(loanID) AS reg_people";

  $result = mysql_query($query);
  $values = mysql_fetch_assoc($result);
  $regp = $values['reg_people'];
  echo   $regp; */

        ?>
                        <!-- end form for validations -->
                <a id="more"></a>
                <hr>

                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
                </div>-->

            </div>
        </div>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

        <script src="js/scripts.js"></script>
      </body>
      </html>
