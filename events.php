<?php session_start(); ?>
<?php $_SESSION['URL'] = $_SERVER['REQUEST_URI']; ?>
<?php include("./reusables/db_connection.php")?>
<?php include("./reusables/id_connection.php")?>
<!DOCTYPE html>
<?php
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    include("./reusables/top-menu.php");

    $sql="SELECT * FROM universities_tab";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        if($id == $row['id']){
            $idexists = true;
        }
    }

    if (!$idexists){
        header("Location: /ratemycaf/notfoundpage.php");
    }
    else{

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
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $row2 = $result2->fetch_assoc();
        echo "<div class='container-for-ban'>";
        echo "<img class='uni-banner-img' src='../images/".$row2['uni_banner_img']."'/>";
        echo "<div class='text-container'>";
        echo "<h1 id='left-sided'>".$row2['uni_name']." -</h1>";
        echo "<h1 id='right-sided'>"."&nbsp;Events</h1>";
        echo "</div>";
        echo "</div>";
        echo "<title> RateMyCaf | $row2[uni_name] </title>";
    ?>
    <div class='events-holder'>
        <div class='adder'>
            <form class='event-form' method="POST" action="/ratemycaf/event_adding.php">
                <label for="title">Title: </label>
                <input class='adder2' type="text" name="title" required>

                <label for="date">Date: </label>
                <input class='adder2'type="text" name="date" required>

                <label for="time">Time: </label>
                <input  class='adder2' type="text" name="time" required>

                <label for="location">Location: </label>
                <input class='adder2'  type="text" name="location" required>

                <label for="color">Color: </label>
                <input class='adder2'  type="text" name="color" required>

                <label for="location">Description:</label>
                <input  class='adder2' type="text" name="description" required>

                <input class='topButtons' type="submit" name="submit" value="Add Event">
            </form>
            <h1 class='adder-header'>Add Here!</h1>
        </div>
        <?php
                        if (isset($_SESSION['privelageerror']))
                        {
                            echo $_SESSION['privelageerror'];
                            unset($_SESSION['privelageerror']);
                        }
                    ?>
    <div class='events-section'>
    <?php
        $sql2="SELECT * FROM events_tab WHERE id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        while($row1 = $result2->fetch_assoc())
        {
            echo "<div class='event-holder' style='background-color: {$row1['color']}'>";
            echo $row1['title']." - ".$row1['date']."<br>";
            echo $row1['time']." at ".$row1['location']."<br>";
            echo $row1['description'];
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

<?php } ?>