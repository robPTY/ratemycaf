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
        $sql2="SELECT * FROM universities_tab WHERE id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $id = $_GET['id'];
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $row2 = $result2->fetch_assoc();
        echo "<div class='container-for-ban'>";
        echo "<img class='uni-banner-img' src='../images/".$row2['uni_banner_img']."'/>";
        echo "<div class='text-container'>";
        echo "<h1 id='left-sided'>".$row2['uni_name']." -</h1>";
        echo "<h1 id='right-sided'>"."&nbsp;".$row2['uni_location']."</h1>";
        echo "<a class='events-but' href='../events/".$row2['id']."'<button>Events</button></a>";
        echo "</div>";
        echo "</div>";
        echo "<title> RateMyCaf | $row2[uni_name] </title>";
    ?>
    <?php
        include("./reusables/footer.php");
    ?>
</body>
</html>

