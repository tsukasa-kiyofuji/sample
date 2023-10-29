<?php 
  session_start();

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