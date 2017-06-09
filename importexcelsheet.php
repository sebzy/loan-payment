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
    <!--<style type="text/css">
    body
    {
    margin: 0;
    padding: 0;
    background-color:#FFFFFF;
    text-align:center;
    }
    .top-bar
    {
    width: 100%;
    height: auto;
    text-align: center;
    background-color:#FFF;
    border-bottom: 1px solid #000;
    margin-bottom: 20px;
    }
    .inside-top-bar
    {
    margin-top: 5px;
    margin-bottom: 5px;
    }
    .link
    {
    font-size: 18px;
    text-decoration: none;
    background-color: #000;
    color: #FFF;
    padding: 5px;
    }
    .link:hover
    {
    background-color: #FCF3F3;
  } -->
    </style>
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
            <hr>
            <p class="lead">
                WELCOME TO THE LOAN MANAGEMENT SYSTEM
            </p><hr>
            <?php


            $con = mysql_connect("localhost","root", "");

            if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }

            mysql_select_db("loanpaymentsystem", $con);
            ?>






            <div class="top-bar">
            <div class="inside-top-bar">Import Excelsheet Data in mysql table<br><br>
            </div>
            </div>
            <div style="text-align:left; border:1px solid #333333; width:854pxpx; margin:0 auto; padding:10px;">

            <form name="import" method="post" enctype="multipart/form-data">
            <input type="file" name="file" class="btn btn-primary"  /><br /><br>

            <!--<button type="submit" class="btn btn-primary" value="Submit">Submit</button><br><br>  -->
              <button type="submit" class="btn btn-primary"   onclick="window.print();" >Print out</button>
            <input type="submit" name="submit" value="Submit" />
            <br><br><p><h3><b> Imported sheets table</b></h3><p>
          </form><br><br>
            <?php
            if(isset($_POST["submit"]))
            {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
           $c = 0;
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
            {
            //$name = $filesop[0];
            //$project = $filesop[1];



          $AccNo = $filesop[0];
            $name =  $filesop[1];
             $Principal = $filesop[2];
            $Interest = $filesop[2];
            $Total = $filesop[4];
           $Payment = $filesop[5];
            $Balance = $filesop[6];

            /*  $loanID = $filesop[0];
             $name =  $filesop[1];
              $amount = $filesop[2];
              $Interest = $filesop[3];
              $AmountToBePaid = $filesop[4];
               $TotalPayments = $filesop[5];
               $Balance = $filesop[6]; */


            //$sql = "INSERT INTO loanregistrar (AccNo, name, amount,date ) VALUES ('$loanID', '$name', '$amount','$date')";

           $sql = mysql_query("INSERT INTO excel_import (AccNo, name, Principal, Interest, Total, Payment, Balance ) VALUES ( '".$AccNo."', '".$name."', '".$Principal."', '".$Interest."',
             '".$Total."', '".$Payment."', '".$Balance."')");
            $c = $c + 1;
          }

        /*  $sql = mysql_query( "INSERT INTO loanregistrar (loanID, name, amount,Interest,AmountToBePaid,TotalPayments,Balance )
          VALUES ('$loanID', '$name', '$amount','$Interest' ,'$AmountToBePaid','$TotalPayments' ,'$Balance')");
            $c = $c + 1;
          } */


            if($sql){
            echo " <b>You database has imported successfully. You have inserted ". $c ." records </b>";
            }else{
            echo "Sorry! There is some problem.";
            }

            }





            $query = "SELECT * FROM excel_import  ";

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
                                                    <th>AccNo:</th>
                                                    <th>name:</th>
                                                    <th>Principal:</th>
                                                    <th>Interest:</th>
                                                    <th>Total:</th>
                                                    <th>Payment:</th>
                                                    <th>Balance:</th>

                                                    </tr></thead>

                                             ';
          //while($data2 = mysql_fetch_array($result2)){ //Creates a loop to loop through results///</tr></thead><tbody>
          while($row = mysql_fetch_array($results)) {
        echo '
        <tr><td>'.$row['AccNo'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['Principal'].'</td>
        <td>'.$row['Interest'].'</td>
        <td>'.$row['Total'].'</td>
        <td>'.$row['Payment'].'</td>
        <td>'.$row['Balance'].'</td></tr>
        ';}
              echo'  </tbody>
                                        </table>
                                    </div>
                                </div>
          ';





            ?>

        <!--/main col-->
    </div>

</div>
<!--/.container-->
<footer class="container-fluid">

        <p class="text-right small">©2016 Company</p>

</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
            </div>
            <div class="modal-body">
                This is a dashboard layout for Bootstrap 4. This is an example of the Modal component which you can use to show content. Any content can be placed inside the modal and it can use the Bootstrap grid classes.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
  </body>
</html>
