<?php

function redirect($url)
{
    header('Location: ' . $url);
    die();
}

//Connecting to databse
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "java_project";

//create a connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successfull!";
}
//getting all requests
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, password)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['email'] = $email;
    redirect("startPage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
