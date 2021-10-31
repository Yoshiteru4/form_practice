<?php
    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    
    $sql = 'SELECT *FROM `survey` ';

    $stmt = $dbh->prepare($sql);
          
    $stmt->execute();

    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach($records as $record){
      echo $record['name'] . '<br>';
      echo $record['id']. '<br>';
      echo $record['email']. '<br>';
      echo $record['pass']. '<br>';
      echo $record['content']. '<br>';
      echo '<hr>';
   }

   // $test = ['id'=>1, 'name'=>'あいう'];
   // var_dump($test);



?>