<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $content = $_POST['content'];

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    $sql = 'INSERT INTO `survey`(`name`, `email`, `pass` `content`) VALUES ("'. $name.'", "'.$email.'", "'.$pass.'" , "'.$content.'")';

    $stmt = $dbh->prepare($sql);
          
    $stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>お問い合わせありがとうございました</h1>
   <div>
      <h3>お問い合わせ内容</h3>
      <p>名前 <?php echo $name; ?></p>
      <p>メールアドレス <?php echo $email; ?></p>
      <p>パスワード <?php echo $pass; ?></p>
      <p>お問い合わせ内容 <?php echo $content; ?></p>
   </div>
</body>
</html>