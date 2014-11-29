<?php
  function session_check(){
    session_start();
    if(isset($_SESSION['id'])){
      header("Location: ./main.php");
    }
  }

  function session_main_check(){
    session_start();
    if(!isset($_SESSION['id'])){
      header("Location: ./signin.php");
    }
  }
?>
