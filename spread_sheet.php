<?php

$name=$_POST['name'];
$class=$_POST['class'];
$english=$_POST['english'];
$math=$_POST['math'];
$social_science=$_POST['social_science'];
$urdu=$_POST['urdu'];
$total=$_POST['total'];
$percentage=$_POST['percentage'];
$hindi=$_POST['hindi'];
$sci=$_POST['science'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spreadsheet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sdata(name,class,hindi,english,math,science,urdu,social_science,total,percentage)
VALUES ('$name','$class','$hindi','$english','$math','$sci','$urdu','$social_science','$total','$percentage')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>