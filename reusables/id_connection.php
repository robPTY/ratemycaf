<?php 
session_start();
    // Step 1: Retrieve dynamic value from rewritten URL
    $request_uri = $_SERVER['REQUEST_URI'];
    $components = explode('/', $request_uri);
    $id = $components[count($components)-1];

    // Step 2: Validate dynamic value
    if (!is_numeric($id)) {
        echo $id;
        die("Invalid product ID");
    }

    // Prepare query
    $stmt = $conn->prepare('SELECT * FROM universities_tab WHERE id = ?');
    $stmt->bind_param('i', $id);

    // Execute query
    $stmt->execute();

    // Retrieve product information
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    // Display product information on page
    ?>