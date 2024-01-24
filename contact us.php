<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="contactus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mesg = $_POST["mesg"];

    // SQL query to insert data into the table
    $sql = "INSERT INTO contact1 (fname, email, mesg) VALUES ('$name', '$email', '$mesg');

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
