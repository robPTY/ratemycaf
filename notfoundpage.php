<?php session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/RMCstyles.css">
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
        <?php include("./reusables/top-menu.php") ?>
    </head>
    <script src="js/RMCcode.js"></script>
    <title>RateMyCaf | Page Not Found</title>
    <body>
        <div class='page-not-found'>
            <img id='nfimg' src='./images/notfound2.jpg'><br>
            <a href='./index.php'><button class='homebutton2'>Go Home</button></a>
        </div>
    </body>
    <?php include("./reusables/footer.php"); ?>
</html>
