<?php session_start(); ?>

<head>
<link rel="stylesheet" href="css/RMCstyles.css">
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
</head>
<?php
    include("./reusables/top-menu.php");
?>
<body>
    <div id="about-section">
        <div id="about-img-section">
            <img id="about-img" src="./images/caf-people2.jpg">
        </div>
        <div id="about-text">
            <h4 class="inside-text-abt" ><span class="highlights">About</span></h4>
            <h2 class="inside-text-abt">RateMyCaf</h2>
            <p class="inside-text-abt">
            We know that cafeterias are some of the most important elements of a school for college students. 
            That's why we've created a community-driven platform that's designed to 
            help students make informed decisions when it comes to selecting the perfect cafeteria to eat at. Using
            community insights, we are able to give you the best selection for you to enjoy your meals.
            </p>
            <p class="inside-text-abt">
            RateMyCaf is your resource for real, honest cafeteria reviews from other students just like you. 
            We encourage you to share your experiences so that others can benefit from your insights and avoid those
            unnecessary wasted meals. 
            Join our community today and contribute to the conversation about college cafeterias and more.
            </p>
            <p class="inside-text-abt">
            Questions? Check our <span class="highlights">help page</span> or send us an email at <span class="highlights">contact@ratemycaf.com</span>.
            </p>
            <p class="inside-text-abt">
                Founded and developed by <span class="highlights" href="www.github/robPTY">Roberto Aguero</span> and <span class="highlights">Grayson Crawford</span>.
            </p>
        </div>
    </div>
</body>
<?php
    include("./reusables/footer.php");
?>

