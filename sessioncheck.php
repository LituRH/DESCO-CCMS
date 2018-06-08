<?php 
  session_start();
    if (!$_SESSION['user']){
  header("location: guest"); } 
?>