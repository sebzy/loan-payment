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
      <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation" >
          <ul class="nav nav-pills nav-stacked">
              <li class="nav-item"><a class="nav-link" href="register.html">Registar loan</a></li>
              <li class="nav-item"><a class="nav-link" href="requestdetail.php">Request details</a></li>
              <li class="nav-item"><a class="nav-link" href="DisplayAllResults.php">Display registry data</a></li>
              <li class="nav-item"><a class="nav-link" href="loanPayment.html">Make loan payment</a></li>
              <li class="nav-item"><a class="nav-link" href="DisplayLoanPayments.html">Display loan payments</a></li>
              <li class="nav-item"><a class="nav-link" href="importexcelsheet.php">Import exel sheet</a></li>
              <li class="nav-item"><a class="nav-link" href="">Export excel sheet</a></li>
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
    //$date = $_POST['date'];
    //$payment = $_POST['payment'];

/*  $result8 = mysql_query($sql8);
while      ($data2 = mysql_fetch_array($result8, MYSQL_ASSOC))***/



        $sql = "SELECT * FROM loandata WHERE loanID = '".$loanID."' ";
        $result2 = mysql_query($sql);



        echo '

        <div class="col-lg-9 col-md-8">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>PaymentID:</th>
                                            <th>payment:</th>
                                            <th>loanID:</th>
                                            <th>date:</th>

                                        </tr>
                                    </thead>
                                ';
 while      ($data2 = mysql_fetch_array($result2)) {
                echo '

        <tr><td>'.$data2['PaymentID'].'</td>
        <td>'.$data2['payment'].'</td>
        <td>'.$data2['loanID'].'</td>
        <td>'.$data2['date'].'</td></tr>';
}






    echo ' </tbody> </table> </div> </div> ';



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
