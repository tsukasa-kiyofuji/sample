<?php 
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

// フォーム入力値の取得
  $title = $_POST['title'];
  $description = $_POST['description'];

// 入力値をデータべースに登録
  $sql_3 = "INSERT INTO blogs(title, description) VALUES(:title, :description)";
  $stmt_3 = $pdo->prepare($sql_3);
  $stmt_3->bindValue(":title", $title);
  $stmt_3->bindValue(":description", $description);
  $stmt_3->execute();

  header('Location: index.php');
  exit;

  $pdo = null;
?>