<?php
echo'
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
    <title>SIGN UP</title>
</head>

<body>

    <div class="container">
        <form class="form" action="insert.php" method="post" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" name="email" class="form__input"  placeholder="Email Address" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" class="form__input" placeholder="Password" required minlength="5" maxlength="10">
                <div class="form__input-error-message"></div>
                <input type="password" class="form__input" placeholder="Confirm Password" required minlength="5" maxlength="10">
                <div class="form__input-error-message"></div>
                <button class="form__button" type="submit">Continue</button>
            </div>
            <p class="form__text">
                <a class="form__link" href="index.html" id="linkLogin">Already have an account? Login!</a>
            </p>
        </form>
    </div>

</body>
<script src="main.js"></script>

</html>
';
