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
    echo " ";
}

$score= [];
$score = mysqli_real_escape_string($conn, $_POST['score']);
//echo "<script>console.log($score)</script>";

//To store scores in the database
$sql = "INSERT INTO vrungame VALUES ('$score')";
//echo $score;

//To fetch scores from the database
$fetch = "SELECT * FROM vrungame ORDER BY score DESC LIMIT 3"; 
$result = $conn->query($fetch);
//$tmp = "<script>".$score."</script>";
    //echo $tmp;
    
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        echo $row["score"].""."";
    }
}else{
    echo "0 results";
}


if ($conn->query($sql) === TRUE) {
    echo 'Page saved!';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
