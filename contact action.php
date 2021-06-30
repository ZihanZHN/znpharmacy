<html>
<body>

<?php
// define variables and set to empty values
$name = $phone = $district = $address = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  
  $address = test_input($_POST["address"]);
  $comment = test_input($_POST["comment"]);
  
  $district = test_input($_POST["District"]);
  $phone = test_input($_POST["phone"]);
  

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (Name , Phone , District , Address , Comment )
VALUES ('$name', '$phone',  '$district', '$address', '$comment' )";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 


</body>
</html> 