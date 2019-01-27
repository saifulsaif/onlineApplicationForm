
<?php
include 'db.php';
$sql = "INSERT INTO college (college)
VALUES ('$_GET[college]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>

<html>
<body>



</body>
</html>