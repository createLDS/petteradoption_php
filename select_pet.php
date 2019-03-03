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
$query = "SELECT * FROM pets";
$result = $conn->query($query);
if($result){
  $pets = $result->fetchAll();
  if(!empty($pets)){
    echo json_encode($pets);
  } else {
    echo json_encode(false);
  }
} else {
  echo json_encode(false);
} 
?>