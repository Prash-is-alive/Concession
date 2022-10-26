<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "\"pwdErr\"") {
        $flag = "Passwords Do not Match!";
    } else if ($_GET['error'] == "\"userErr\"") {
        $flag = "User not Found!";
    }else if($_GET['error'] == "\"trespassErr\""){
        $flag = "Trespassing not Allowed!";
    }
} else {
    $flag = "";
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
        <form class="form" action="check.php" method="post" id="createAccount">
            <h1 class="form__title">LOGIN</h1>
            <div class="form__message form__message--error"><?php echo $flag; ?></div>
            <div class="form__input-group">
                <input type="email" name="email" class="form__input" id="email" placeholder="Email Address" required>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" id="password" class="form__input" placeholder="Password" required minlength="5" maxlength="10">
                <input type="password" name="confirmPassword" id="confirmPassword" class="form__input" placeholder="Confirm Password" required minlength="5" maxlength="10">
                <button class="form__button" type="submit">Continue</button>
            </div>
            <p class="form__text">
                <a class="form__link" href="signup.html" id="linkLogin">Create an Account</a>
            </p>
        </form>
    </div>

</body>
<script src="main.js"></script>

</html>