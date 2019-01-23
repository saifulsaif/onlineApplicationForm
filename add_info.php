<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "online_registration";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO user_info (first_name, last_name,father_name,mother_name,number,email,address,10th_pass,12th_pass,physics,chemistry,biology,college,note,file)
VALUES ('$_GET[first_name]','$_GET[last_name]','$_GET[father_name]','$_GET[mother_name]','$_GET[number]','$_GET[email]','$_GET[address]','$_GET[ten_pass]','$_GET[twelve_pass]','$_GET[physics]','$_GET[chemistry]','$_GET[biology]','$_GET[college]','$_GET[note]','$_GET[file]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<html>
<body>



</body>
</html>