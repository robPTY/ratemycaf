<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/LOGstyles.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
	</head>
	<body id='login-bod'>
		<div id="holder">
            <form method="post" action="register_process.php">
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
	</body>
</html>