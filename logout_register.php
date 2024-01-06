<?php 
  session_start();
  require ('db.php');
  
  if (isset($_POST["logout"])) {
    $_SESSION = array();
    session_destroy();
    // echo "ログアウトしました。";
    header("Location: login.php");
    exit();
  }

  $pdo = null;
?>