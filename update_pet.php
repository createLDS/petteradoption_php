<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
    $conn = new PDO("mysql:host=localhost;dbname=petteradoption", "root", "root");
}
catch (PDOExpection $e) {
    echo "Error" . $e->getMessage();
}
$petName = $_POST['petName'];
$petGender = $_POST['petGender'];
$petDOB = $_POST['petDOB'];
$petSpecies = $_POST['petSpecies'];
$petPhotos = $_POST['petPhotos']; //must be in img folder
$petadminID = $_POST['petadminID'];

$query = "UPDATE pets SET petName='{$_POST["petName"]}' , petGender='{$_POST["petGender"]}', petDOB='{$_POST["petDOB"]}', petSpecies='{$_POST["petSpecies"]}', petPhotos='{$_POST["petPhotos"]}', petadminID='{$_POST["petadminID"]}' WHERE petID='{$_POST["petID"]}'" ;
//echo $query;
$result = $conn->query($query);
if($result){
  $pets = $result->fetchAll();
  if(!empty($pets)){
    echo json_encode($pets);
  } else {
    echo json_encode(true);
  }
} else {
  echo json_encode(false);
} 
?>