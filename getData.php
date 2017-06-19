<?php
$servername = "10.0.0.2";
$username = "precision";
$password = "farming01";
$dbname = "farmingdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ( $conn->connect_error ){
  die("[]");
}

$result = $conn->query( "SELECT * FROM `pfdata`;" );

if( $result->num_rows > 0 ){
  $data = array();
  while( $row = $result->fetch_assoc() ){
    array_push( $data, $row ); 
  }
  echo json_encode( $data );
} else {
  echo "[]";
}

$conn->close();
?> 