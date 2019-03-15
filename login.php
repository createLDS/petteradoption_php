 <?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

/*$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "petteradoption";*/

try {
   $conn = new PDO("mysql:host=cig4l2op6r0fxymw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ppg1bdg8coul7ed1","kpxp96k9j2q1anmp","er6s0s73za50ig2e");
}
catch(PDOException $e){
  echo "Error" . $e->getMessage();
}

$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];


//$query = "UPDATE users SET(petName, petGender, petDOB, petSpecies, petPhotos, petStatus, petadminID) VALUES ('$petName', '$petGender', '$petDOB', '$petSpecies', '$petPhotos', '$petStatus', '$petadminID') WHERE ";

$query = "SELECT * From Users WHERE userEmail='$userEmail';";

echo $query;
$result = $conn->query($query);

if($result>0){
  //if worked
 // echo "Your upload was successful";
  echo json_encode(array(
    "login"=>true
	));
} else {
  //echo "Sorry, your upload failed";
  echo json_encode(array(
		"login"=>false
	));
}

?>
