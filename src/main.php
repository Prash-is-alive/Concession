<?php
//Connecting to databse
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successfull!";
}