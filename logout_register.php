<?php 
  session_start();
  
  if (isset($_POST["logout"])) {
    $_SESSION = array();
    session_destroy();
    // echo "ログアウトしました。";
    header("Location: login.php");
    exit();
  }

$host = getenv("JAWSDB_HOST");
$username = getenv("JAWSDB_USER");
$password = getenv("JAWSDB_PASSWORD");
$database = getenv("JAWSDB_DATABASE");
$port = getenv("JAWSDB_PORT");

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "データベースに接続しました";

  } catch (PDOException $e) {
    die("データベースエラー: " . $e->getMessage());
}

  $pdo = null;

?>