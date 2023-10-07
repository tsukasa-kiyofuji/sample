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
            <a href="index.php"><h1>○○のブログサイト</h1></a>
        </section>
        <section id="new-wrapper">
            <h2>●新規投稿</h2>
            <form action="receive.php" method="post">
                <div>タイトル</div>
                <input type="text" name="title">
                <div>内容</div>
                <textarea name="description"></textarea>
                <input type="submit" name="" value="送信">
            </form>
        </section>
    </main> 
    </div>
</body>



