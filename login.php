<?php 
  session_start();

// リダイレクト：ログイン済の場合
  if (isset($_SESSION["login"])) {
    header("Location: index.php");
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
?>

<?php 
  echo phpversion();

  echo "show variables like 'hostname'";
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="utf-8">
  <title>ブログサイト</title>
  <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div class="wrap-original">
    <main>
        <section id="signup-wrapper">
              <?php if(isset($_GET["empty_error"])): ?>
              <p><?php echo "エラー：メールアドレスまたはパスワードを入力してください" ?></p>
              <?php elseif(isset($_GET["unmatch_error"])): ?>
              <p><?php echo "エラー：メールアドレスまたはパスワードが間違っています" ?></p>
              <?php endif ?>
            <h1>●ログイン</h1>
            <form action="login_register.php" method="post">
                <nav>
                    <div>メールアドレス</div>
                    <input type="text" name="email">
                    <div>パスワード</div>
                    <input type="password" name="pass">
                    <input type="submit" name="" value="ログイン">
                </nav> 
            </form>
            <h4><a href="signup.php">新規登録の方はこちら</a></h4>
        </section>
    </main> 
    </div>
</body>

<?php $pdo = null ?>