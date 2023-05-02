<?php session_start(); ?>
<?php $_SESSION['URL'] = $_SERVER['REQUEST_URI']; ?>

<head>
<link rel="stylesheet" href="css/RMCstyles.css">
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
<title>RateMyCaf | About</title>

</head>
<?php
    include("./reusables/top-menu.php");
?>
<body>
    <div id="about-section">
        <div id="about-img-section">
            <img id="about-img" src="./images/help.jpg">
        </div>
        <div id="about-text">
            <h4 class="inside-text-abt" ><span class="highlights">HELP</span></h4>
            <h2 class="inside-text-abt">RateMyCaf</h2>
            <p class="inside-text-abt">
            Welcome to our web application for rating cafeterias of universities! Our platform is designed to help you find the best dining options on campus based on the experiences of students and staff members.
If you're new to our website, here are a few tips to help you get started. First, you can search for a specific university using our search bar or browse through our list of universities to find the one you're interested in. Once you've selected a university, you'll be able to see a list of all the cafeterias on campus that have been rated by our community.
Our rating system is based on a five-star scale, with five stars being the highest rating a cafeteria can receive. You can read reviews from other users to get an idea of what the food, atmosphere, and service are like at each cafeteria. If you've visited a cafeteria yourself, you can also leave your own rating and review to help others make informed decisions.
            </p>
            <p class="inside-text-abt">
            We hope our platform helps you discover new dining options and make informed choices
             about where to eat on campus. If you have any questions or feedback, please don't hesitate
              to contact us. Thank you for using our web application!
            </p>
        </div>
    </div>
</body>
<?php
    include("./reusables/footer.php");
?>

