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

  $search = $_GET['search'];
// エラー反応(リダイレクト)1:$searchが空の場合
  if(empty($search)){
    header('Location: index.php');
    exit;
  }

  $sql_5 = "select * from blogs where title like '%".$search."%' or description like '%".$search."%'";
  $stmt_5 = $pdo->prepare($sql_5);
  $stmt_5->execute();
  $data_5 = $stmt_5->fetchAll(PDO::FETCH_ASSOC);

// エラー反応2:$searchがデータベースに存在しない場合
  $count = $stmt_5->rowCount(); 
  if($count === 0){
    echo "検索ワードを含むブログは存在しません。";
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
            <?php if ($stmt_5): ?>
            <?php foreach ($data_5 as $row_5): ?>
            <a href="detail.php?id=<?php echo $row_5['id'] ?>">
                <table> 
                    <tr>
                        <td><?php echo $row_5['title'] ?></td>      
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


