<?php session_start(); ?>
<?php include("./reusables/db_connection.php")?>
<?php
    // Step 1: Retrieve dynamic value from rewritten URL
    $request_uri = $_SERVER['REQUEST_URI'];
    $components = explode('/', $request_uri);
    $id = $components[count($components)-1];

    // Step 2: Validate dynamic value
    if (!is_numeric($id)) {
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
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            while($row2 = $result2->fetch_assoc())
            {
                echo $row2['uni_name'];
            }
        ?>
    </title>
</head>
<body>
    <?php
        $sql2="SELECT * FROM universities_tab WHERE id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $id = $_GET['id'];
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        while($row2 = $result2->fetch_assoc())
        {
            echo "<div class='container-for-ban'>";
            echo "<img class='uni-banner-img' src='../images/".$row2['uni_banner_img']."'/>";
            echo "<div class='text-container'>";
            echo "<h1 id='left-sided'>".$row2['uni_name']." -</h1>";
            echo "<h1 id='right-sided'>"."&nbsp;".$row2['uni_location']."</h1>";
            echo "</div>";
            echo "</div>";
        }
    ?>
    <div class='main-holder'>
        <div class='comment-section'>
            <?php
                $sql2="SELECT * FROM cafeterias_tab WHERE id = ?";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("i", $id);
                $id = $_GET['id'];
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                while($row2 = $result2->fetch_assoc())
                {
                    echo "<div class='review'>";
                    echo "<div class='icon'>";
                    echo "<img class='icon-img' src='../images/".$row2['icon']."'>";
                    echo "</div>";
                    echo "<div class='comment'>";
                    echo "<span class='cafeteria-title'>".$row2['cafeteria']."</span><br>";
                    echo $row2['description']."<br>";
                    echo "<span class='meal-title'>Student Rating: </span>";
                    echo $row2['rating'];
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class='menu-section'>
            <h1>Today's Menu</h1>
            <?php
                $sql2="SELECT * FROM menu_tab WHERE id = ?";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("i", $id);
                $id = $_GET['id'];
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                while($row2 = $result2->fetch_assoc())
                {
                    echo "<div class='menu-content'>";
                    echo "<span class='meal-title'>Breakfast: </span>";
                    echo $row2['breakfast']."<br>";
                    echo "<span class='meal-title'>Lunch: </span>";
                    echo $row2['lunch']."<br>";
                    echo "<span class='meal-title'>Dinner: </span>";
                    echo $row2['dinner']."<br>";
                    echo "<span class='meal-title'>Dessert: </span>";
                    echo $row2['dessert']."<br>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <?php
        include("./reusables/footer.php");
?>
</body>
</html>

