<?php
//Connecting to Database
$host ="localhost";
$user = "root";
$pass ="";
$db = 'scores';

$conn = new mysqli($host, $user, $pass, $db); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} else{
    echo 'Connection Successful';
}
echo "<script>($score)</script>";

echo "<script>console.log($score)</script>";
$score = mysqli_real_escape_string($conn, $_POST['score']);

echo "<script>console.log($score)</script>";
$sql = "INSERT INTO vrungame VALUES ('score')";


$tmp = "<script>".$score."</script>";
    echo $tmp;

if ($conn->query($sql) === TRUE) {
    echo 'Page saved!';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
