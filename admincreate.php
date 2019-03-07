<?php
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Origin: no-cors');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
  $conn = new PDO("mysql:host=cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
  
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}
//variables
$adminFirstName = $_POST['adminFirstName'];
$adminLastName = $_POST['adminLastName'];
$adminEmail = $_POST['adminEmail'];
$adminUsername = $_POST['adminUsername'];
$adminPassword = $_POST['adminPassword'];

//function to insert users into db
$query = "INSERT INTO admin (adminFirstName,adminLastName,adminEmail,adminUsername,adminPassword) VALUES ('$adminFirstName','$adminLastName','$adminEmail','$adminUsername','$adminPassword')";


$result = $conn->query($query);

if($result){
  $id = $conn->lastInsertId();
  echo json_encode(array(
    "status"=>true,
    "id"=>$id
  ));
} else {
  echo json_encode(false);
}

?>