<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
try {
 $conn = new PDO("mysql:host=cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
     
}
catch (PDOExpection $e) {
    echo "Error" . $e->getMessage();
}
$query = "SELECT * FROM messages";
$result = $conn->query($query);
if($result){
  $pets = $result->fetchAll();
  if(!empty($messages)){
 
   echo json_encode($messages);
  
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
} 

?>