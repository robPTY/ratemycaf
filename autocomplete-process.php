<?php
    include("db_connection.php");
    $query = $_GET['term'];
    // Fetch the suggestions from table
    $sql = "SELECT uni_name FROM universities_tab WHERE uni_name LIKE '%".$query."%'";
    $result = $conn->query($sql);

    $suggestions = array();

    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['uni_name'];
    }

    echo json_encode($suggestions);
?>