<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=petteradoption", "root", "root");
  echo "Conneted!"
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
]

//function to insert users into db
$query = "INSERT INTO pets (petName, petGender, petDOB, petSpecies, petPhotos, petadminID) VALUES ('$petName','$petGender','$petDOB','$petSpecies','$petPhotos','$petadminID')";


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