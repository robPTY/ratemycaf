<?php 
  session_start();

  include ("reusables/db_connection.php");

  $email=($_POST['email']);
  $pwd=($_POST['password']);



  $sql = "SELECT * FROM Registration_tab WHERE email = '$email' AND password = '$pwd'";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc(); 

  if(($conn->query($sql) == TRUE) && (isset($_POST['captcha']) && ($_POST['captcha']!=""))){
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
    {
      $_SESSION['message'] = "<span style='color:red;'>Entered captcha code is incorrect.</span>";
      header('location: login.php');

    }
    else{
      header('location: index.php');
    }
  }
  else
    {
      $_SESSION['message'] = "<span style='color:red;'>Username or password is incorrect</span>";
      header('location: login.php');
    }
 ?>
