<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php?error="trespassErr"');
    die();
}
$_SESSION['college'] = $_POST['college'];
$_SESSION['Source'] = $_POST['Source'];
$_SESSION['destination'] = $_POST['destination'];
$_SESSION['class'] = $_POST['class'];
$_SESSION['Period'] = $_POST['Period'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <style>
        .info {
            display: flex;
            flex-direction: column;
            justify-items: center;
            /* padding: 10rem; */
        }

        .mybtn {
            display: flex;
            justify-content: center;
        }

        .container>h1 {
            text-align: center;
            text-decoration: underline;

        }
    </style>

    <title>LOGIN</title>
</head>

<body>
    <div class="container ">
        <h1>Double check your details</h1>
        <div class="info   d-flex flex-column">
            <b>Name: <?php echo $_SESSION['name']; ?></b><br>
            <b>Telephone: <?php echo $_SESSION['tel']; ?></b><br>
            <b>Date: <?php echo $_SESSION['date']; ?></b><br>
            <b>Age: <?php echo $_SESSION['age']; ?></b><br>
            <b>Aadhar: <button class="prevBtn" onclick="document.getElementById('previewimgbox').style.display ='inline';">Preview</button></b><br>
            <?php echo '<img src="' . $_SESSION['img_location'] . '" alt="img" id="previewimgbox" style="width:50%; display:none; border-radius: var(--border-radius);">' ?><br>
            <b>College: <?php echo $_SESSION['college']; ?></b><br>
            <b>Source: <?php echo $_SESSION['Source']; ?></b><br>
            <b>Destination: <?php echo $_SESSION['destination']; ?></b><br>
            <b>Class: <?php echo $_SESSION['class']; ?></b><br>
            <b>Period: <?php echo $_SESSION['Period']; ?></b><br>
            <div class="mybtn">
                <button class="form__button  mt-auto" type="submit" onclick="location.replace('final_submit.php');">SUBMIT</button>
            </div>
        </div>
    </div>


</body>
<script src="main.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>