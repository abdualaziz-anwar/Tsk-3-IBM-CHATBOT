<?php 
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "robottable";

    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);




 ?>

 <!DOCTYPE html>
 <html>
 <!-- --------------------------------------------- -->
 <head>
 	<title>Test</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <!-- --------------------------------------------- -->
 
 <body>

 	<?php
 	$eng1=$_POST["eng1"];
 	$eng2=$_POST["eng2"];
 	$eng3=$_POST["eng3"];
 	$eng4=$_POST["eng4"];
 	$eng5=$_POST["eng5"];

  if ( in_array( "Save", $_POST ) ) {
    $Status = 0;
  } else if ( in_array( "Play", $_POST ) ) {
    $Status = 1;
  }
 	$query="insert into robottable(eng1,eng2,eng3,eng4,eng5,Status)values({$eng1},{$eng2},{$eng3},{$eng4},{$eng5},{$Status})";
    $result=mysqli_query($conn,$query);

     if ($result){
       echo "Data added sucessfully.";

   }else{
       die("Can Not conenct to the database".mysqli_connect_error($conn));
   }

 	?>
  <a href="../MainPage.html">GetBack</a>

 </body>
 </html>

 <?php
mysqli_close($conn);
?>