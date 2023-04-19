<?php
    include("reusables/db_connection.php");
    $query = $_GET['term'];
    // Fetch the suggestions from table
    $sql = "SELECT uni_name FROM universities_tab WHERE uni_name LIKE '%".$query."%'";
    $result = $conn->query($sql);

    $suggestions = array();

    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['uni_name'];
    }    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $university = $_POST['university'];
    $password = $_POST['password'];
    $matches = preg_grep('/^' . preg_quote($university, '/') . '$/', $suggestions);
    if (!preg_match('/@.*\.edu$/', $email)) {
        echo "Please enter a valid .edu email address.";
    } 
    else if(empty($matches)) { 
        echo "Please enter a valid university that we support.";
    }
    else {
        
        $sql1 = "INSERT INTO Registration_tab (email, name, university, password) VALUES ('$email', '$name', '$university', '$password');";
        if ($conn->query($sql1) === TRUE) {
            header('Location: '.'index.php');
        } 
    }      
?>