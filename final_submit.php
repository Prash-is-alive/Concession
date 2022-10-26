<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php?error="trespassErr"');
    die();
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "\"pwdErr\"") {
            $flag = "Passwords Do not Match!";
        } else if ($_GET['error'] == "\"userErr\"") {
            $flag = "User not Found!";
        } else if ($_GET['error'] == "\"trespassErr\"") {
            $flag = "Trespassing not Allowed!";
        }
    } else {
        $flag = "";
    }
}


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

$user_id = $_SESSION['id'];
$name = $_SESSION['name'];
$college = $_SESSION['college'];
$source = $_SESSION['Source'];
$destination = $_SESSION['destination'];
$age = $_SESSION['age'];
$tel = $_SESSION['tel'];
$date = $_SESSION['date'];
$class = $_SESSION['class'];
$period = $_SESSION['Period'];

$sql = "INSERT INTO `form_responses` (`user_id`, `name`, `college`, `source`, `destination`, `class`,`period`, `age`, `tel`, `date`) VALUES ('$user_id', '$name', '$college', '$source', '$destination','$class','$period', '$age', '$tel', '$date');";

if (!$conn->query($sql) === TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>SUBMITED!</title>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center;"><?php echo $_SESSION['name'] . ' your form has been submitted!' ?></h2>
        <?php echo '<span>Contact to ' .  $_SESSION['Source'] . ' station to get your pass!' ?></span>
        <a href="logout.php">Logout</a>
    </div>



</body>
<script src="main.js"></script>

</html>