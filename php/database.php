<?php 
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "engine-movment";

    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);




 ?>

 <!DOCTYPE html>
 <html>
 <!-- --------------------------------------------- -->
 <head>
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
 </head>
 <!-- --------------------------------------------- -->
 
 <body>

 <?php
    if(in_array( "Up", $_POST)) {
        $status = '1';
    } else if (in_array("right",$_POST)) {
        $status = '2';
    } else if (in_array("Stop",$_POST)) {
        $status = '0';
    } else if (in_array("down",$_POST)) {
        $status = '3';
    } else if (in_array("Left",$_POST)) {
        $status = '4';
    }else{
        $status='9';
    }
    // $query = "insert into engine-movment(status)values({$status})";

    $query = "insert into test(di)values({$status})";
    
    $result = mysqli_query( $conn, $query );
    if ( $result ) {
        echo "Data added sucessfully";
    } else {
        die( "Data could not added to the database".mysqli_connect_error() );
    }
    ?>
    </div>
      <a href="../MainPage.html">GetBack</a>

</body>
</html>

<?php
mysqli_close( $conn );
?>