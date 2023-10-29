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

  $sql_2 = "select * from blogs where id = :id" ;
  $stmt_2 = $pdo->prepare($sql_2);
  $stmt_2->bindValue(":id", $id);
  $stmt_2->execute();
  $data_2 = $stmt_2->fetchAll(PDO::FETCH_ASSOC);

// エラー反応(リダイレクト)3:$idがデータベースに存在しないidの場合
  $count = $stmt_2->rowCount(); 
  if($count === 0){
    header('Location: index.php');
    exit;
  }

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
            </div>
        </section>
        <section id="detail-wrapper">
            <?php if ($stmt_2): ?>
            <?php foreach ($data_2 as $row_2): ?>
                <table> 
                    <tr>
                        <td><?php echo $row_2['title'] ?></td>     
                    </tr> 
                    <tr>
                        <td><?php echo $row_2['description'] ?></td> 
                    </tr>      
                </table>
            <?php endforeach ?>  
            <?php endif ?>    
            <a href="delete.php?id=<?php echo $id ?>">削除する</a>
          </section>
    </main> 
    </div>
</body>

<?php $pdo = null ?>