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
               <b> You have successfully registered the loan applicant </b>
            </p>
            <P></p>
             

            <br>
            <hr>
            <!-- start form for validation -->




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
$ContactNextOfKin = $_POST['ContactOfNextOfKin'];




    $sql = "INSERT INTO persondetails (PersonID, name,ResidenceLocation,date, DOB,sex , WorkStation, District, EmploymentNumber, CurrentOccupation,PhoneContact, NextOfKin, ContactNextOfKin   )
    VALUES ('$PersonID', '$name', '$ResidenceLocation','$date','$DOB' ,'$sex' ,'$WorkStation' ,'$District' ,'$EmploymentNumber','$CurrentOccupation' ,'$PhoneContact' ,'$NextOfKin' , '$ContactNextOfKin')";

    //$sql2 = "Select  amount FROM loanregistrar where loanID ='$loanID' ";
      //  $row = mysql_fetch_assoc(mysql_query($sql2, $con));

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

  //"successfully sent the reg data.";
 // header("Location:success.html");


//mysql_close($con);



      /**  echo '
1
        <div class="col-lg-9 col-md-8">
                            <div class="table-responsive" style=" width:120%;">
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
                                            </tr></thead> ';
*/
       
  //while($row = mysql_fetch_array($result9)) {
    
echo '



<p>  <b>PersonID : </b>'   .$PersonID.'</p>

<p>  <b>Name :</b>'   .$name.'</p>

<p>  <b>Date of registering the loan applicant</b> :'   .$date.'</p>

<p>  <b>Residence location :</b>'   .$ResidenceLocation.'</p>




<p>  <b>Date of birth :</b>'   .$DOB.'</p>

<p>  <b>Sex :</b>'   .$sex.'</p>

<p>  <b>Work station :</b>'   .$WorkStation.'</p>

<p>  <b>District :</b>'   .$District.'</p>

<p>  <b>Employment Number :</b>'   .$EmploymentNumber.'</p>

<p>  <b>Current Occupation :</b>'   .$CurrentOccupation.'</p>

<p>  <b>Phone Contact :</b>'   .$PhoneContact.'</p>

<p>  <b>Next Of Kin :</b>'   .$NextOfKin.'</p>

<p>  <b>Sex :</b>'   .$sex.'</p>

<p>  <b>Next of kin contact address :</b>'   .$ContactNextOfKin .'</p>




';
      echo'  
                            </div>
                        </div>
  ';
            
   ?>
            
            
        </div>
            </div>
        </div>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

        <script src="js/scripts.js"></script>
      </body>
      </html>
