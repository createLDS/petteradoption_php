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

$petName = $_POST['petName'];
$petGender = $_POST['petGender'];
$petDOB = $_POST['petDOB'];
$petSpecies = $_POST['petSpecies'];
$petPhotos = $_POST['petPhotos']; //must be in img folder
$petadminID = $_POST['petadminID'];
$petStatus = $_POST['petStatus'];


//function to insert users into db
$query = "INSERT INTO pets (petName, petGender, petDOB, petSpecies, petPhotos, petadminID, petStatus) VALUES ('$petName','$petGender','$petDOB','$petSpecies','$petPhotos','$petadminID','$petStatus')";


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