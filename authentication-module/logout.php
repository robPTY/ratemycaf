<?php
    Session_start();
    Session_destroy();
    header('location: '.$_SESSION['URL']);
?>