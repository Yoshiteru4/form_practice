<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $content = $_POST['content'];

   //  var_dump($name . $pass);

   if($name == ''){
      $name_result = '名前が入力されておりません';
   }else{
       $name_result = $name;
   }

   if($email == ''){
         $email_result = 'メールアドレスが入力されておりません';
   }else{
      $email_result = $email;
   }

   if($pass == ''){
         $pass_result = 'パスワードが入力されておりません';
   }else{
      $pass_result = $pass;
   }

   if($content == ''){
         $content_result = '内容が入力されておりません';
   }else{
      $content_result = $content;
   }

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
   <h1>入力内容をご確認ください</h1>
   <p>名前 <?php echo $name ?></p>
   <p>メールアドレス <?php echo $email ?></p>
   <p>パスワード <?php echo $pass ?></p>
   <p>お問い合わせ内容 <?php echo $content ?></p>
   <form action="thank.php" method="POST">
      <input type="hidden" name="name" value="<?php echo $name ?>">
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <input type="hidden" name="pass" value="<?php echo $pass ?>">
      <input type="hidden" name="content" value="<?php echo $content ?>">
      <input type="submit" value="OK">
   </form>
</body>
</html>