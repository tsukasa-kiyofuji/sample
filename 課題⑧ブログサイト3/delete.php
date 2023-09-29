<?php 
  $dsn = "mysql:dbname=task_six_blogs;host=localhost";
  $user = "root";
  $password = "tsuka1793";
  
  try {
    $pdo = new PDO($dsn, $user, $password);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }

  $id = $_GET['id'];
  $id_letter = intval($id);
// エラー反応(リダイレクト)1:$idが空の場合
  if(empty($id)){
    header('Location: index.php');
    exit;
  }
// エラー反応(リダイレクト)2:$idが数字以外の場合
  elseif($id_letter === 0){
    header('Location: index.php');
    exit;
  }

  $sql_4 = "delete from blogs where id = :id";
  $stmt_4 = $pdo->prepare($sql_4);
  $stmt_4->bindValue(":id", $id);
  $stmt_4->execute();

// エラー反応(リダイレクト)3:$idがデータベースに存在しないidの場合
  $count = $stmt_4->rowCount(); 
  if($count === 0){
    header('Location: index.php');
    exit;
  }

  header('Location: index.php');
  exit;

  $pdo = null;
?>