<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
  $conn = new PDO("mysql:cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname:ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
  //$conn = new PDO("mysql:host=localhost;dbname=petteradoption","root","root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}
//variables

$userFirstName = $_POST['userFirstName'];
$userLastName = $_POST['userLastName'];
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];
$userDOB = $_POST['userDOB'];
$userGender = $_POST['userGender'];

//function to insert users into db
$query = "INSERT INTO users (userFirstName, userLastName, userEmail, userPassword, userDOB, userGender) VALUES ('$userFirstName','$userLastName','$userEmail','$userPassword','$userDOB', '$userGender')";


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