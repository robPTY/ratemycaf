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
        include("top-menu.php");
        include("db_connection.php");
    ?>
</head>

<body>
    <div id="search-section"> 
        <p>Finding a place to eat just got a lot simpler.</p>
        <form name="search-bar-form" method="POST" action="">
            <input id="search-bar" placeholder="Search for your university" type="text"/>
            <input id="search-button" value="✈️" type="button"/>
        </form>
    </div>
    <div id="information-section"> 
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
                <p>Write an anonymized review</p>
                <p>Share your experience at your college cafeteria by writing a review. Be honest with your ratings
                    on the food, staff and facility.
                    Your reviews are completely anonymous and will help raise engagement at these locations.
                </p>
            </div>
        </div>
        <div id="layer3">
        </div>
    </div>
    <div id="review-section">
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>
