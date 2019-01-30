<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=petteradoption", "root", "root");
  echo "Conneted!"
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
$query = "INSERT INTO users (adminFirstName,adminLastName,adminEmail,adminUsername,adminPassword) VALUES ('$adminFirstName','$adminLastName','$adminEmail','$adminUsername','$adminPassword')";


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