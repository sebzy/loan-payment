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
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item"><a class="nav-link" href="#">Registar loan</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Request details</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Display all data</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Make loan payment</a></li>
                <li class="nav-item"><a class="nav-link" href="">Display loan payments</a></li>
                <li class="nav-item"><a class="nav-link" href="">Import exel sheet</a></li>
                <li class="nav-item"><a class="nav-link" href="">Export excel sheet</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
                <li class="nav-item"><a class="nav-link" href="">One more</a></li>
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
            <hr>
            <p class="lead">
                WELCOME TO THE LOAN MANAGEMENT SYSTEM
            </p>

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

    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("loanpaymentsystem", $con);



    $loanID = $_POST['loanID'];
    //$name = $_POST['name'];
    //$amount = $_POST['amount'];
    //$date = $_POST['date'];

  //  $sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

          //  $principle = $row['amount'];
        //    $Interest = ($principle*20)/100;
          //  $AmountToBePaid = $principle + $Interest;



       // $sql = "INSERT INTO loanregistrar ( AmountToBePaid, Interest ) VALUES ( '$AmountToBePaid', '$Interest') WHERE loanID ='$loanID' ";
         // $result1 = mysql_query($sql);
  //  $sql5 =" UPDATE loanregistrar SET AmountToBePaid = '$AmountToBePaid' WHERE loanID = '$loanID' ";

  //   $result5 = mysql_query($sql5);


  //  $sql6 =" UPDATE loanregistrar SET Interest = '$Interest' WHERE loanID = '$loanID' ";

    // $result6 = mysql_query($sql6);


    //if (!mysql_query($sql,$con))
    //  {
     // die('Error: ' . mysql_error());
     // }


    //total payments

  //  $query = "SELECT COUNT(*) AS total, SUM(payment) AS total_payment FROM loandata WHERE loanID='$loanID'";

  //  $result = mysql_query($query);
  //  $values = mysql_fetch_assoc($result);

  //  $num_payments = $values['total'];
  //  $total_value_ofpayments = $values['total_payment'];
    //echo "Number of Records Found # ".$num_payments;
    //echo "Total Money ".$total_value_ofpayments;

    //UPDATE THE TOTAL PAYMENTS
  //  $sql2 =" UPDATE loanregistrar SET TotalPayments = '$total_value_ofpayments' WHERE loanID = '$loanID' ";

    // $result2 = mysql_query($sql2);

    //NUMBER OF PAYMENTS
  //  $sql3 =" UPDATE loanregistrar SET NumberOfPayments = '$num_payments' WHERE loanID = '$loanID' ";

    // $result3 = mysql_query($sql3);

    // UPDATE BALANCE
    //$balance = $AmountToBePaid - $total_value_ofpayments;

  //  $sql6 =" UPDATE loanregistrar SET Balance = '$balance' WHERE loanID = '$loanID' ";

    // $result6 = mysql_query($sql6);



    //DISPLAY TABLE
   $sql8 = " SELECT * FROM loanregistrar WHERE loanID = '$loanID' ";

    $result8 = mysql_query($sql8);
    while      ($data2 = mysql_fetch_array($result8, MYSQL_ASSOC)) {

//<table bgcolor="#e6e6e6" cellpadding="10" style="width:100%" id="printTable" border="4px">
//<tr><td>Loan ID:</td>  <td>Name:</td>  <td>Amount:</td> <td>date:</td> <td>Interest:</td><td>Amount to be paid:</td><td>Total Payments:</td><td>Number of Payments:</td><td>Balance:</td> </tr>

    echo '

    <div class="col-lg-9 col-md-8">
                        <div class="table-responsive">
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
                                    </tr>
                                </thead>
                                <tbody>

    <tr><td>'.$loanID.'</td>
    <td>'.$data2['name'].'</td>
    <td>'.$data2['amount'].'</td>
    <td>'.$data2['date'].'</td><td>'.$data2['Interest'].'</td><td>'.$data2['AmountToBePaid'].'</td>
    <td>'.$data2['TotalPayments'].'</td>
    <td>'.$data2['NumberOfPayments'].'</td>
    <td>'.$data2['Balance'].'</td></tr>

    </tbody>
                            </table>
                        </div>
                    </div>

       ' ;

    //echo '</table';
    }


    mysql_close($con);
    ?>

      </body>
      </html>



</body>
</html>

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

    <!--scripts loaded here-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
  </body>
</html>
