<?php 
  require ('db.php');

  $email = $_POST['email'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// エラー反応（リダイレクト）1:メールアドレスorパスワードが空の場合
  if(empty($email) || empty($_POST['pass'])){
    header('Location: signup.php?empty_error=1');
    exit;
  }

  $sql_6 = "SELECT * FROM users WHERE email = :email" ;
  $stmt_6 = $pdo->prepare($sql_6);
  $stmt_6->bindValue(":email", $email);
  $stmt_6->execute();
  $data_6 = $stmt_6->fetch(PDO::FETCH_ASSOC);

// エラー反応（リダイレクト）2:登録済みのメアドの場合
  if($data_6['email'] == $email){ 
    header('Location: signup.php?duplicate_error=1');
    exit;
  }
  else{
   $sql_7 = "INSERT INTO users(email, password) VALUES(:email, :pass)" ;
   $stmt_7 = $pdo->prepare($sql_7);
   $stmt_7->bindValue(":email", $email);
   $stmt_7->bindValue(":pass", $pass);
   $stmt_7->execute();
   header('Location: login.php');
   exit;
  }

  $pdo = null;
?>