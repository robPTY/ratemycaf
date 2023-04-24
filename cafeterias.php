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
            echo $row2['uni_name'];
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
    <div class='main-holder'>
        <div class='comment-section'>
            <div class='addcommentsection'>
            <form method="POST" action="/ratemycaf/commentrating_process.php">
                <input type="text" id="cafname" name="cafname" placeholder="Cafeteria Name..." value="">
                    <div class="stars">
                            <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                            <label class="star star-1" for="star-1"></label>
                    </div>
                    <?php
                        if (isset($_SESSION['privelageerror']))
                        {
                            echo $_SESSION['privelageerror'];
                            unset($_SESSION['privelageerror']);
                        }
                    ?>
                    <input class="comment-button" id="submit" type="submit" value="Submit Comment">
                <br><textarea type="text" name="addcomment" id="addcomment" placeholder="Add comment..." value=""></textarea>
                </form>
            </div>
            <?php
                $sql2="SELECT * FROM cafreviews_tab WHERE id = ?";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("i", $id);
                $id = $_GET['id'];
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                while($row1 = $result2->fetch_assoc())
                {
                    echo "<div class='review'>";
                    echo "<div class='icon'>";
                    echo "<img class='icon-img' src='../images/".$row1['icon']."'>";
                    echo "</div>";
                    echo "<div class='comment'>";
                    echo "<span class='cafeteria-title'>".$row1['cafeteria']."</span><br>";
                    echo $row1['description']."<br>";
                    echo "<span class='meal-title'>Student Rating: </span>";
                    if ($row1['rating'] == 5) {
                        echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><br>";
                    } elseif ($row1['rating'] == 4) {
                        echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><br>";
                    } elseif ($row1['rating'] == 3) {
                        echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><br>";
                    } elseif ($row1['rating'] == 2) {
                        echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><br>";
                    } elseif ($row1['rating'] == 1) {
                        echo "<i class='fa fa-star'></i><br>";
                    } else {
                        echo "No Rating<br>";
                    }
                    echo "<span class='meal-title'>Student Name: </span>";
                    echo $row1['studname']."(".$row2['uni_short_name'].")<br>";
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

