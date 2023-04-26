<?php 
  session_start();

  include ("./reusables/db_connection.php");

  $title=($_POST['title']);
  $date=($_POST['date']);
  $time=($_POST['time']);
  $location=($_POST['location']);
  $color=($_POST['color']);
  $description=($_POST['description']);

  $sql = "SELECT * FROM universities_tab WHERE id = '$_SESSION[id]';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();


  if($_SESSION['email'] == $row['email'] && $_SESSION['logged_in'] == true){
    $sql1 = "INSERT INTO events_tab (id, title, date, location, time, color, description) VALUES ('$_SESSION[id]', 
      '$title', '$date', '$location', '$time', '$color', '$description');";
    if ($conn->query($sql1) === TRUE) {
      header('Location: /ratemycaf/events/'.$_SESSION['id']);
    }
  }
  else if ($_SESSION['logged_in'] == false){
    $_SESSION['privelageerror'] = "<span style='color:red;'>You may not add event until logged in.</span>";
    header('Location: /ratemycaf/events/'.$_SESSION['id']);
  }
  else{
    $_SESSION['privelageerror'] = "<span style='color:red;'>You may not add event unless you are $row[email].</span>";
    header('Location: /ratemycaf/events/'.$_SESSION['id']);
  }
 ?>
