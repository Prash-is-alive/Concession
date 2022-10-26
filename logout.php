<?php
    session_start();
    session_unset();
    session_destroy();
    echo "You were logged out!";
    header("Location: index.php");
?>