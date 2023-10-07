<?php 
  session_start();
  
  if (isset($_POST["logout"])) {
    $_SESSION = array();
    session_destroy();
    // echo "ログアウトしました。";
    header("Location: login.php");
    exit();
  }

  $dsn = "mysql:dbname=t1thivzsrdk5y4wj;host=nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "xzwbwzes9yv8yjbb";
  $password = "vkmg1w9wizgqg3pn";

  try {
    $pdo = new PDO($dsn, $user, $password);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }

  $pdo = null;

?>