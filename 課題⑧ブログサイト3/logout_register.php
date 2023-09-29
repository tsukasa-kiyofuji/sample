<?php 
  session_start();
  
  if (isset($_POST["logout"])) {
    $_SESSION = array();
    session_destroy();
    // echo "ログアウトしました。";
    header("Location: login.php");
    exit();
  }

  $dsn = "mysql:dbname=task_six_blogs;host=localhost";
  $user = "root";
  $password = "tsuka1793";

  try {
    $pdo = new PDO($dsn, $user, $password);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }

  $pdo = null;

?>