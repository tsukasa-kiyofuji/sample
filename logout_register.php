<?php 
  session_start();
  
  if (isset($_POST["logout"])) {
    $_SESSION = array();
    session_destroy();
    // echo "ログアウトしました。";
    header("Location: login.php");
    exit();
  }

$host = getenv("nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com ");
$username = getenv("xzwbwzes9yv8yjbb");
$password = getenv("vkmg1w9wizgqg3pn");
$database = getenv("t1thivzsrdk5y4wj");
$port = getenv("3306");

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "データベースに接続しました";

  } catch (PDOException $e) {
    die("データベースエラー: " . $e->getMessage());
}

  $pdo = null;

?>