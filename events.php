<?php session_start(); ?>
<?php include("./reusables/db_connection.php")?>
<?php include("./reusables/id_connection.php")?>
<!DOCTYPE html>
<?php
    include("./reusables/top-menu.php");
?>
<html>
<head>
    <link rel="stylesheet" href="../css/RMCstyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=TiltWarp">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
    <title>RateMyCaf | 
        <?php 
            $sql2="SELECT * FROM universities_tab WHERE id = ?";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("i", $id);
            $id = $_GET['id'];
            $_SESSION['id'] = $id;
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            $row2 = $result2->fetch_assoc();
            echo $row2['uni_name']." Events";
        ?>
    </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
</head>
<body>
    <?php
        include("./reusables/footer.php");
?>
</body>
</html>

