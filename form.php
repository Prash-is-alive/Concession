<?php
session_start();


if (!isset($_SESSION['email'])) {
    header('Location: index.php?error="trespassErr"');
    die();
}
$_SESSION['name'] = $_POST['name'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['date'] = $_POST['date']
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
        <h2>Application Details:</h2>
        <form class="form" action="submit_form.php" method="post" id="createAccount">
            <div class="form__input-group">
                <select id="college" class="form__input" name="college" placeholder="college" required>
                    <option value="" disabled selected>College</option>
                    <option value="frcrce">Fr Conceicao Rodrigues College of Engineering</option>
                    <option value="tcet">Thakur College of Engineering and Technology</option>
                    <option value="bhavans">BHAVAN'S College of Commerce and Arts</option>
                    <option value="mldc">Dahanukar College of Commerce and Arts</option>
                </select>
                <select id="Source" class="form__input" name="Source" required>
                    <option value="" disabled selected>Source</option>
                    <option value="Dahisar">Dahisar</option>
                    <option value="Borivali">Borivali</option>
                    <option value="Kandivali">Kandivali</option>
                    <option value="Malad">Malad</option>
                    <option value="Goregoan">Goregoan</option>
                    <option value="Ram">Ram Mandir</option>
                    <option value="Jogeshwri">Jogeshwri</option>
                    <option value="Andheri">Andheri</option>
                    <option value="Vile">Vile Parle</option>
                    <option value="Santacruz">Santacruz</option>
                    <option value="Khar">Khar Road</option>
                    <option value="Bandra">Bandra</option>
                    <option value="Mahim">Mahim</option>
                    <option value="Matunga">Matunga</option>
                    <option value="Dadar">Dadar</option>
                </select>
                <select id="destination" class="form__input" name="destination" required>
                    <option value="" disabled selected>Destination</option>
                    <option value="Dahisar">Dahisar</option>
                    <option value="Borivali">Borivali</option>
                    <option value="Kandivali">Kandivali</option>
                    <option value="Malad">Malad</option>
                    <option value="Goregoan">Goregoan</option>
                    <option value="Ram">Ram Mandir</option>
                    <option value="Jogeshwri">Jogeshwri</option>
                    <option value="Andheri">Andheri</option>
                    <option value="Vile">Vile Parle</option>
                    <option value="Santacruz">Santacruz</option>
                    <option value="Khar">Khar Road</option>
                    <option value="Bandra">Bandra</option>
                    <option value="Mahim">Mahim</option>
                    <option value="Matunga">Matunga</option>
                    <option value="Dadar">Dadar</option>
                </select>
                <select id="class" class="form__input" name="class" placeholder="Destination" required>
                    <option value="" disabled selected>Class</option>
                    <option value="first">First Class</option>
                    <option value="second">Second Class</option>
                </select>
                <select id="Period" class="form__input" name="Period" placeholder="Period" required>
                    <option value="" disabled selected>Period</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Monthly">Monthly</option>
                </select>
            </div>
            <div class="form__input-group">
                <button class="form__button" type="submit">Submit</button>
            </div>
            <?php
            $filename  = $_FILES['file']['name'];
            $location = "upload/" . $filename;
            $_SESSION['img_location'] = $location;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location))
                echo '<b>File uploaded successfully!</b>';
            else
                echo '<b>Unable to upload file!</b>';
            ?>
        </form>
        <!-- <span><a href="logout.php">LOGOUT!</a></span> -->
    </div>


</body>
<script src="main.js"></script>

</html>