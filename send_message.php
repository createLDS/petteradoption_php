<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
  $conn = new PDO("mysql:cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname:ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
  //$conn = new PDO("mysql:host=localhost;dbname=petteradoption", "root", "root");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}
//variables
$msgTo = $_POST['msgTo'];
$msgPetName = $_POST['msgPetName'];
$msgContent = $_POST['msgContent'];


//function to insert messages into db
$query = "INSERT INTO messages (msgTo, msgPetName, msgContent) VALUES ('$msgTo','$msgPetName','$msgContent')";


$result = $conn->query($query);

if($result){
  $id = $conn->lastInsertId();
  //if worked
 // echo "Your upload was successful";
  echo json_encode(array(
    "status"=>true,
    "id"=>$id
  ));
} else {
  //echo "Sorry, your upload failed";
  echo json_encode(false);
}

?>