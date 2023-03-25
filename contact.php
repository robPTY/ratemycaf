<head>
<link rel="stylesheet" href="css/RMCstyles.css">
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<?php
    include("./reusables/db_connection.php");
    include("./reusables/top-menu.php");
?>
<?php
    $sql2="SELECT * FROM `universities_tab`"; //Selects all books from books table
    $result2=$conn->query($sql2);
    $count=0;
    echo "<table><tr>";
    while($row2 = $result2->fetch_assoc())
    {
        echo "<td>";
        echo "<div class='uni-cards'>";
        echo "<div class='uni-card-img'>";
        echo "<img class='uni-img' src='./images/".$row2['uni_img']."'/>";
        echo "</div>";
        echo "<div class='uni-cards-text'>";
        echo "<div class='uni-card-name'>";
        echo $row2['uni_short_name']."<br>";
        echo "</div>";
        echo $row2['uni_location'];
        echo "</div>";
        echo "</div>";
        echo "</td>";
        $count++;
        if($count % 4 == 0){
            echo "</tr><tr>";
        }
        if($count == 8){
            break;
        }
    }
    echo "</tr></table>";
    include("./reusables/footer.php");
?>

