<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=petteradoption","root","root");
  echo "Conneted!"
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