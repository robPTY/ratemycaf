<?php 
  session_start();

  include ("../reusables/db_connection.php");

  $cafname=($_POST['cafname']);
  $comment=($_POST['addcomment']);
  $rating=($_POST['star']);

  $sql = "SELECT * FROM universities_tab WHERE id = '$_SESSION[id]';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if($_SESSION['email'] == $row['email'] && $_SESSION['logged_in'] == true){
    $sql1 = "INSERT INTO cafreviews_tab (id, cafeteria, rating, description, studname, icon) VALUES ('$_SESSION[id]', '$cafname', '$rating', '$comment', '$_SESSION[name]', 'icon.jpg');";
    if ($conn->query($sql1) === TRUE) {
      header('Location: /ratemycaf/cafeterias/'.$_SESSION['id']);
    }
  }
  else if ($_SESSION['logged_in'] == false){
    $_SESSION['privelageerror'] = "<span style='color:red;'>You may not comment until logged in.</span>";
    header('Location: /ratemycaf/cafeterias/'.$_SESSION['id']);
  }
  else{
    $_SESSION['privelageerror'] = "<span style='color:red;'>You may not comment unless you are $row[email].</span>";
    header('Location: /ratemycaf/cafeterias/'.$_SESSION['id']);
  }

 ?>
