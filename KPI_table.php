<html><head></head>
	<body>

  <?php

$con = mysql_connect("localhost","root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("HR_system", $con);


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
    $query = "SELECT * FROM KPI_table   ";

    $results = mysql_query($query);




        echo '

        <div class="col-lg-9 col-md-8">
                            <div class="table-responsive" style=" width: 125%;">
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>personID:</th>
                                            <th>KPI:</th>
                                            <th>rate:</th>
                                            <th>username:</th>
                                            <th>month:</th>
                                            <th>adminID:</th>
                                            <th>admin_rate:</th>
                                            <th>average:</th>
                                            <th>KPI ID:</th>
                                        

                                     ';
  //while($data2 = mysql_fetch_array($result2)){ //Creates a loop to loop through results///</tr></thead><tbody>
  while($row = mysql_fetch_array($results)) {
echo '
<tr><td>'.$row['personID'].'</td>
<td>'.$row['KPI1'].'</td>
<td>'.$row['rate1'].'</td>
<td>'.$row['username'].'</td>
<td>'.$row['month'].'</td>
<td>'.$row['adminID'].'</td>
<td>'.$row['admin_rate'].'</td>
<td>'.$row['average'].'</td>
<td>'.$row['KPIID'].'</td>

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
<br>


	  </body>
</html>