<?php session_start(); ?>
<?php $_SESSION['URL'] = $_SERVER['REQUEST_URI']; ?>

<head>
<link rel="stylesheet" href="css/RMCstyles.css">
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
<title>RateMyCaf | Terms & Conditions</title>

</head>
<?php
    include("./reusables/top-menu.php");
?>
<body>
    <div id="about-section">
        <div id="about-img-section">
            <img id="about-img" src="./images/terms.jpg">
        </div>
        <div id="about-text">
            <h4 class="inside-text-abt" ><span class="highlights">Terms and Conditions</span></h4>
            <h2 class="inside-text-abt">RateMy<span class='highlights'>Caf</span></h2>
            <p class="inside-text-abt">
            Since this is a student project, you are welcome to use RateMyCaf for whatever you feel like.
            We take pride in being an open-source search engine/web application that students can use in
            their daily lives as college students or future college students looking for a home to find.
            All of the data we use (pictures, names, etc.) is public for anyone to view and we have made 
            sure to follow all terms of usage. Our databases are also available per request to show that we 
            do not keep any information that we should not. Additionally, every school in our database is listed 
            in our footer.
            </p>
            <p class="inside-text-abt">
            We encourage you guys to share this project with all your friends whether they may be from
            the same college or not. We also want to indicate that since this is not a real project, we 
            do not make revenue or claim any of the information as our own. All we are doing is making the 
            platform for people to view reviewed cafeterias. Again, <strong>we do not claim any of this information 
            as our own</strong>
            </p>
            <p class="inside-text-abt">
            For more information about our purpose/motivation, please check out the <strong><a href='./about.php'>About</a></strong> page.
            </p>
        </div>
    </div>
</body>
<?php
    include("./reusables/footer.php");
?>

