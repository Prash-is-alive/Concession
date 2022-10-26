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

if (!$conn)
    die("Sorry we failed to connect: " . mysqli_connect_error());

//getting all requests
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirmPassword'];

if ($password != $confirm_password) {
    redirect('index.php?error="pwdErr"');
    die();
}

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' ";
$query = mysqli_query($conn, $sql);
$resultsCounter = 0;
while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    $resultsCounter++;
    $id = $row['id'];
}
if ($resultsCounter) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    redirect("startPage.php");
} else {
    redirect('index.php?error="userErr"');
    die();
}
$conn->close();
