<?php
    $query = $_GET['q'];
    include("db_connection.php");
    // Fetch the suggestions from table
    $sql = "SELECT uni_name FROM universities_tab WHERE uni_name LIKE '%$query%'";
    $result = $conn->query($sql);

    $suggestions = array();
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['uni_name'];
    }
    }

    // Return the suggestions as a JSON response
    header('Content-Type: application/json');
    echo json_encode(array_values($suggestions));
?>