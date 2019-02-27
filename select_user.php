<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
  $conn = new PDO("mysql:cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname:ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
   // $conn = new PDO("mysql:host=localhost;dbname=petteradoption", "root", "root");
}
catch (PDOExpection $e) {
    echo "Error" . $e->getMessage();
}
//$userID = $_POST['userID'];
$userEmail = $_POST['userEmail'];
$userPassword  = $_POST['userPassword'];

$query = "SELECT * FROM users WHERE userEmail='$userEmail' AND userPassword='$userPassword'";

$result = $conn->query($query);
if($result){
  $users = $result->fetchAll();
  if(!empty($users)){ 
    echo json_encode(array(
      "status"=>true,
      "id"=>$users[0]["id"],
      "email" =>$userEmail,
      "password" =>$userPassword
    ));
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
} 

?>