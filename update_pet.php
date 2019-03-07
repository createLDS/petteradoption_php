<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

/*$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "petteradoption";*/

try {
  $conn = new PDO("mysql:cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname:ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
   
}
catch(PDOException $e){
  echo "Error" . $e->getMessage();
}

$petID = $_POST['petID'];
$petadminID = $_POST['petadminID'];
$petName = $_POST['petName'];
$petGender = $_POST['petGender'];
$petDOB = $_POST['petDOB'];
$petSpecies = $_POST['petSpecies'];
$petPhotos = $_POST['petPhotos'];
$petStatus = $_POST['petStatus'];



//$query = "UPDATE users SET(petName, petGender, petDOB, petSpecies, petPhotos, petStatus, petadminID) VALUES ('$petName', '$petGender', '$petDOB', '$petSpecies', '$petPhotos', '$petStatus', '$petadminID') WHERE ";

$query = "UPDATE pets SET petName='{$_POST["petName"]}', petGender='{$_POST["petGender"]}', petDOB='{$_POST["petDOB"]}', petSpecies='{$_POST["petSpecies"]}', petPhotos='{$_POST["petPhotos"]}', petStatus='{$_POST["petStatus"]}' WHERE petID='{$_POST["petID"]}' AND petadminID='{$_POST["petadminID"]}'";

$result = $conn->query($query);
if($result){
  $pets = $result->fetchAll();
  if(!empty($pets)){
    echo json_encode($pets);
  } else {
    echo json_encode(true);
  }
} else
{
  echo json_encode(false);
}


?>