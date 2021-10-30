<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="check.php" method="POST">
      <div>
         名前<br>
         <input type="text" name="name">
      </div>
      <div>
         メールアドレス<br>
         <input type="text" name="email">
      </div>
      <div>
         パスワード <br>
         <input type="password" name="pass" id="">
      </div>
      <div>
         お問い合わせ内容<br>
         <textarea name="content" id="" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" value="送信">
   </form>
</body>
</html>