<?php 
  $dsn = "mysql:dbname=t1thivzsrdk5y4wj;host=nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "xzwbwzes9yv8yjbb";
  $password = "vkmg1w9wizgqg3pn";
  
  try {
    $pdo = new PDO($dsn, $user, $password);  
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