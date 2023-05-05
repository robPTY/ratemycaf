<?php session_start();
if ($_SESSION['logged_in'] == true){
    header('Location: /ratemycaf/');
}
else{
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../css/LOGstyles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/RMCstyles.css">
        <link rel="stylesheet" href="../css/LOGstyles.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
        <?php include("../reusables/top-menu.php") ?>
    </head>
    <script src="js/RMCcode.js"></script>
    <title>RateMyCaf | Login</title>

    <body>
        <div id="login-section">
            <form id="logform" method="POST" action="login_process.php">
                <h1 class='login-title'> Log In </h1>
                <input class="name" id="email" name="email" type="email" placeholder="E-Mail"/>
                <input class="name" id="password" name="password" type="Password" placeholder="Password"/>
                <p><strong>Enter Captcha:</strong></p><br />
                <input type="text" name="captcha"/>
                <p><br/>
                <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
                </p>
                <p>Can't read the image?
                <a href='javascript: refreshCaptcha();'>click here</a>
                to refresh</p>
                <?php
                  if (isset($_SESSION['message']))
                  {
                      echo $_SESSION['message'];
                      unset($_SESSION['message']);
                  }
                ?>
                <input class="submit" type="submit" id="login-button" value="Log In"/>
                <a href="register.php"><p>Don't have an account? Sign Up</p></a>
            </form>
        </div>
        <?php include("../reusables/footer.php"); ?>
    </body>
</html>
<?php } ?>