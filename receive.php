<?php 
  $url = parse_url(getenv("mysql://xzwbwzes9yv8yjbb:vkmg1w9wizgqg3pn@nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/t1thivzsrdk5y4wj"));

  try {
    $pdo = new PDO("mysql:host=" . $url["host"] . ";dbname=" . substr($url["path"], 1), $url["user"], $url["pass"]);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
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