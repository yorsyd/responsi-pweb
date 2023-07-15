<?php
  $username = $_GET["user"];
  $password = $_GET["pw"];
  //cek username
  if($username == "admin" && $password == "admin"){
    header("Location: dashboard.php");
  }else{
    header("Location: login.php");
  }
?>
