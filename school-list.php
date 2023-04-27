<?php session_start(); ?>
<?php $_SESSION['URL'] = $_SERVER['REQUEST_URI']; ?>

<head>
<link rel="stylesheet" href="css/RMCstyles.css">
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
<title>RateMyCaf | School List</title>

</head>
<?php
    include("./reusables/top-menu.php");
    include("./reusables/db_connection.php");
?>
<body>
    <div id="school-list-section">
        <div id="school-img-section">
            <img id="school-list-img" src="./images/uniart.jpg">
        </div>
        <div id="about-text">
            <h4 class="inside-text-abt" ><span class="highlights">Lists of Schools in</span></h4>
            <h2 class="inside-text-abt">RateMyCaf</h2>
            <?php
                $sql2="SELECT * FROM `universities_tab`"; //Selects all books from books table
                $result2=$conn->query($sql2);
                $count=0;
                echo "<div id='unis-list-holder'>";
                while($row2 = $result2->fetch_assoc())
                {
                    echo "<a class='school-list-text' href='/ratemycaf/cafeterias/$row2[id]'>".$row2['uni_name']."</a><br>";
                }
                echo "</div>";
            ?>
        </div>
    </div>
</body>
<?php
    include("./reusables/footer.php");
?>

