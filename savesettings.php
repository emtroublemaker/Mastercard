<?php
//Connecting to Database
$host ="localhost";
$user = "root";
$pass ="";
$db = 'scores';

$conn = new mysqli($host, $user, $pass, $db); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 


$score = mysqli_real_escape_string($conn, $_POST['score']);
//$amount = mysqli_real_escape_string($conn, $_POST['amount']);
//$times = mysqli_real_escape_string($conn, $_POST['times']);

echo "<script>console.log($score)</script>";

if (strlen($times) > 200000) {  $times = "";    }

$sql = "INSERT INTO vrungame (score) VALUES ('$score');

$tmp = '<script>''.$score.'</script>';
echo $tmp;

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>