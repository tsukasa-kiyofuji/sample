<?php 
  session_start();

  require ('vendor/autoload.php');

// リダイレクト：ログインしていない場合
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
  }

  $message = $_SESSION["login"]."さんようこそ";
  echo $message;

  $dsn = "mysql:dbname=t1thivzsrdk5y4wj;host=nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "xzwbwzes9yv8yjbb";
  $password = "vkmg1w9wizgqg3pn";

  try {
    $pdo = new PDO($dsn, $user, $password);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }

  $sql_1 = "select * from blogs" ;
  $stmt_1 = $pdo->prepare($sql_1);
  $stmt_1->execute();
  $data_1 = $stmt_1->fetchAll(PDO::FETCH_ASSOC);
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
        <section id="top-wrapper">
            <div>
                <a href="index.php"><h1>○○のブログサイト</h1></a>
                <a href="new_post.php"><h2>●新規投稿</h2></a>
                <form action="search.php" method="get">
                    <textarea rows="1" name="search"></textarea>
                    <input type="submit" name="" value="検索">
                </form>
                <form class="logout_button" action="logout_register.php" method="post">
                    <input type="hidden" name="logout" value="true">
                    <input type="submit" value="ログアウト">
                </form>
            </div>
        </section>
        <section id="list-wrapper">
            <?php if ($stmt_1): ?>
            <?php foreach ($data_1 as $row_1): ?>
            <a href="detail.php?id=<?php echo $row_1['id'] ?>">
                <table> 
                    <tr>
                        <td><?php echo $row_1['title'] ?></td>      
                    </tr>       
                </table>
            </a> 
            <?php endforeach ?>
            <?php endif ?> 
        </section>
    </main>	
    </div>
</body>

<?php $pdo = null ?>

  $dsn = "mysql:dbname=t1thivzsrdk5y4wj;host=nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "xzwbwzes9yv8yjbb";
  $password = "vkmg1w9wizgqg3pn";

  try {
    $pdo = new PDO($dsn, $user, $password);  
  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }