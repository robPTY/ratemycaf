<?php
    //just so Rob can access remotely
    header('Access-Control-Allow-Origin: *');
    $conn = new mysqli("localhost", "root", "", "ratemycaf");
    if ($conn->connect_errno)
    {
        die('Could not connect: ' . $conn->connect_errno);
    }
    else{
        //echo "connected to DB";
    }

?>