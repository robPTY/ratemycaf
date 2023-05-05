<?php session_start(); 
if ($_SESSION['logged_in'] == true){
    header('Location: /ratemycaf/');
}
else{
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/LOGstyles.css"/>
        <link rel="stylesheet" href="../css/RMCstyles.css">
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
        <title>RateMyCaf | Register</title>
        <?php include("../reusables/top-menu.php") ?>
	</head>
    <title>RateMyCaf | Register</title>
	<body>
		<div id="reg-section">
            <form id="logform" method="post" action="register_process.php">
                <h1 class='register-title'>Register</h1>
                <input placeholder="E-Mail" type="email" name="email" id="email" required>
                <input placeholder="Name" name='name' id='name' required>
                <input placeholder="University" name='university' id='university' required>
                <input placeholder='Password' type='password' name='password' id='password' required>
                <button type="submit" class='btn btn-primary' id='reg-but'>Register</button>
                <?php
                  if (isset($_SESSION['emailerror']))
                  {
                      echo $_SESSION['emailerror'];
                      unset($_SESSION['emailerror']);
                  }
                  else if (isset($_SESSION['unierror']))
                  {
                      echo $_SESSION['unierror'];
                      unset($_SESSION['unierror']);
                  }
                ?>
            </form>
        </div>
        <?php include("../reusables/footer.php"); ?>
	</body>
</html>
<?php } ?>