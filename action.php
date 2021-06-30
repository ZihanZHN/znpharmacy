<html>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment  = $district = $phone = $address =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
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
$dbname = "contactf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cdetails (Name , Telephone , Address , District , Gender , Comment)
VALUES ('$name', '$phone', '$address', '$district', '$gender', '$comment' )";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

<?php
echo "<h2>Your Input:</h2>";
echo "Name: "; echo $name;
echo "<br>";
echo "Email: "; echo $email;
echo "<br>";
echo "Telephone Number: "; echo $phone;
echo "<br>";
echo "Address: "; echo $address;
echo "<br>";
echo "District: "; echo $district;
echo "<br>";
echo "Gender: "; echo $gender;
echo "<br>";
echo "Comment: "; echo $comment;

?>
</body>
</html> 