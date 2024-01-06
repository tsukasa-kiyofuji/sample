<?php 
  session_start();
  require ('db.php');

  $email = $_POST['email'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  
// エラー反応（リダイレクト）1:メアドorパスワードが空の場合
  if(empty($email) || empty($_POST['pass'])){
    header('Location: login.php?empty_error=1');
    exit;
  }

  $sql_8 = "SELECT * FROM users WHERE email = :email" ;
  $stmt_8 = $pdo->prepare($sql_8);
  $stmt_8->bindValue(":email", $email);
  $stmt_8->execute();
  $data_8 = $stmt_8->fetch(PDO::FETCH_ASSOC);

// エラー反応（リダイレクト）2:メールアドレスまたはパスワードが間違っている場合  
  if(!(password_verify($_POST['pass'], $data_8['password']))){
    header('Location: login.php?unmatch_error=1');
    exit;
  }
  else{
    session_regenerate_id(TRUE);
    $_SESSION['login'] = $_POST['email'];
    header('Location: index.php');
    exit;
  }

  $pdo = null;
?>