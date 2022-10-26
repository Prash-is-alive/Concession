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
    <title>LOGIN</title>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center;">Welcome <?php echo $_SESSION['email'] ?> !</h2>
        <form class="form" action="form.php" method="post" id="createAccount" enctype="multipart/form-data">
            <p><b>Personal Details:</b></p>
            <div class="form__input-group">
                <input type="name" name="name" class="form__input" id="name" placeholder="Applicant Name" required>
                <input type="tel" class="form__input" placeholder="Telephone" name="tel" id="tel" required>
                <input type="number" class="form__input" placeholder="Age" name="age" id="age" max="70" required>
                <input type="text" class="form__input" placeholder="Birth Date" onfocus="(this.type='date')" name="date" id="date" required>
                <p> <label for="file">
                        <b>Proof of Identity:</b>
                    </label></p>
                <input type="file" class="form__input" name="file" id="file" required>
            </div>
            <div class="form__input-group">
                <button class="form__button" type="submit">Continue</button>
            </div>
        </form>
        <!-- <span><a href="logout.php">LOGOUT!</a></span> -->
    </div>


</body>
<script src="main.js"></script>

</html>