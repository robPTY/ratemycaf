<?php
    //just so Rob can access remotely
    header('Access-Control-Allow-Origin: *');
    include("reusables/db_connection.php");
    // Fetch the suggestions from table
    $sql = "SELECT uni_name FROM universities_tab";
    $result = $conn->query($sql);

    $suggestions = array();

    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['uni_name'];
    }

    echo json_encode($suggestions);
?>