<?php
try {
  $user = 'root';
  $password = '';
  
  $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  
  
  ]);
}
  
  
  
  catch (PDOExpection $e){
  die ('Verbindung konnte nicht hergestellt werden' .$e -> getMessage());
  }
  

  // $query = 'select * from post limit 3';
  
  //if (($_GET['action']?? '') === 'all'){
      $query = 'select * from post order by created_at desc';
  //}
  
  
  $stmt = $pdo ->query($query);
  $rows = $stmt->fetchAll();
  

   
?>