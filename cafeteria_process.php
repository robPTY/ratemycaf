<?php 
  session_start();

  include ("./reusables/db_connection.php");
  $searchbar=($_POST['search-bar']);

  $sql = "SELECT * FROM universities_tab WHERE uni_name = '$searchbar'";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc(); 

  header("Location: ./cafeterias.php/".$row['id']);
 ?>
