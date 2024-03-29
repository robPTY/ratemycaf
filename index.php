<?php session_start(); ?>
<?php $_SESSION['URL'] = $_SERVER['REQUEST_URI']; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/RMCstyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=TiltWarp">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- jQuery UI library -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="js/RMCcode.js"></script>
    <title>RateMyCaf | University Cafeteria Reviews</title>
    <?php 
        include("./reusables/top-menu.php");
        include("./reusables/db_connection.php");
    ?>
</head>

<?php if($_SESSION["registered"] === true){
    unset($_SESSION["registered"]);
     ?>
    <script>
        alert("Registration successful. You may now proceed to login.");
    </script>
<?php } ?>
<body>
    <div id="search-section"> 
        <p>Finding a place to eat just got a lot simpler.</p>
        <form name="search-bar-form" method="POST" action="processes/cafeteria_process.php">
            <input name="search-bar" id="search-bar" placeholder="Search for your university" type="text"/>
        </form>
    </div>
    <div id="information-section" class='reveal'> 
        <div class="layer1" >
            <div class="side-text">
                <p>Find your school</p>
                <p>We have collected cafeteria reviews from over a thousand United States cafs. Search for your school to get started.
                    If for some reason your school does not show up in our database, please follow the correct steps to add
                    them in.
                </p>
            </div>
            <div class="side-img">
                <img id="search-img" src="./images/search.jpg">
            </div>
        </div>
        <div class="layer1">
            <div class="side-img">
                <img id="search-img" src="./images/review.jpg">
            </div>
            <div class="side-text">
                <p>Write a secure and personal review</p>
                <p>Share your experience at your college cafeteria by writing a review. Be honest with your ratings
                    on the food, staff and facility.
                    Your reviews are secured within our database and do not compromise any of your user 
                    details, so you wont have to worry about any data stealing.
                </p>
            </div>
        </div>
        <div id="layer3">
        </div>
    </div>
    <div id="review-section" class='reveal'>
    <?php
        $sql2="SELECT * FROM `universities_tab`"; 
        $result2=$conn->query($sql2);
        $count=0;
        echo "<table><tr>";
        while($row2 = $result2->fetch_assoc())
        {
            echo "<td>";
            echo "<a class='nchor' href='cafeterias/$row2[id]'>";
            echo "<div class='uni-cards'>";
            echo "<div class='uni-card-img'>";
            echo "<img class='uni-img' src='./images/".$row2['uni_img']."'/>";
            echo "</div>";
            echo "<div class='uni-cards-text'>";
            echo "<div class='uni-card-name'>";
            echo "<span class='boldt'>".$row2['uni_short_name']."</span><br>";
            echo "</div>";
            echo $row2['uni_location'];
            echo "</div>";
            echo "</div>";
            echo "</a>";
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
    ?>
    </div>
    <?php
        include("./reusables/footer.php");
    ?>
<?php
    echo "<script type='text/javascript'>
      window.addEventListener('scroll', reveal);

      function reveal(){
        var reveals = document.querySelectorAll('.reveal');
        for(var i=0; i < reveals.length; i++){
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;

          if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
          }
        }
      }
    </script>";
?>
</body>
</html>
