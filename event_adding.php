<?php 
  session_start();

  include ("./reusables/db_connection.php");

  $title=($_POST['title']);
  $date=($_POST['date']);
  $time=($_POST['time']);
  $location=($_POST['location']);
  $color=($_POST['color']);
  $sql = "SELECT * FROM universities_tab WHERE id = '$_SESSION[id]';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $sql1 = "INSERT INTO events_tab (id, title, date, location, time, color) VALUES ('$_SESSION[id]', 
    '$title', '$date', '$location', '$time', '$color');";
  if ($conn->query($sql1) === TRUE) {
    header('Location: /ratemycaf/events/'.$_SESSION['id']);
  }
 ?>
