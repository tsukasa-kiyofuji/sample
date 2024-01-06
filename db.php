<?php 
  session_start();

  $dsn = "mysql:dbname=t1thivzsrdk5y4wj;host=nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "xzwbwzes9yv8yjbb";
  $password = "vkmg1w9wizgqg3pn";

  try {
    $pdo = new PDO($dsn, $user, $password);

  $createTableBlogs = "CREATE TABLE IF NOT EXISTS blogs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NULL
  )";

  $createTableUsers = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";

    $pdo->exec($createTableBlogs);
    $pdo->exec($createTableUsers);

  } catch (Exception $e) {
    print("Connection failed:".$e->getMessage());
    exit();
  }

  ini_set('display_errors', "On");

  $pdo = null;
?>
