<?php
try {
  $conn = new PDO("mysql:host=cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ppg1bdg8coul7ed1", "kpxp96k9j2q1anmp", "er6s0s73za50ig2e");
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