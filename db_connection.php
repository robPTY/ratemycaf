<?php
    $conn = new mysqli("localhost", "root", "", "ratemycaf");
    if ($conn->connect_errno)
    {
        die('Could not connect: ' . $conn->connect_errno);
    }
    else{
        //echo "connected to DB";
    }

?>