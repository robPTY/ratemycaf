<?php
    $email = $_POST['email'];
    if (preg_match('/@.*\.edu$/', $email)) {
        // Proceed with registration
    } else {
        echo "Please enter a valid .edu email address";
    }      
?>