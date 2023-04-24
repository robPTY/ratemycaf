<?php 
  session_start();

  include ("./reusables/db_connection.php");

  $email=($_POST['email']);
  $pwd=($_POST['password']);

  $sql = "SELECT * FROM Registration_tab WHERE email = '$email' AND password = '$pwd'";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc(); 

  if(($conn->query($sql) == TRUE) && (isset($_POST['captcha']) && ($_POST['captcha']!=""))){
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
    {
      $_SESSION['message'] = "<span style='color:red;'>Entered captcha code is incorrect.</span>";
      header('Location: ./login.php');
    }
    else{
      $at_pos = strpos($email, '@'); 
      $edu_pos = strpos($email, '.edu'); 
      $emailsubstring = substr($email, $at_pos, $edu_pos); 
      $_SESSION['logged_in'] = true;
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $emailsubstring;
      $_SESSION['password'] = $row['password'];
      $_SESSION['university'] = $row['university'];
      header('Location: ./index.php');
    }
  }
  else
    {
      $_SESSION['message'] = "<span style='color:red;'>Username or password is incorrect</span>";
      header('Location: ./login.php');
    }
 ?>
