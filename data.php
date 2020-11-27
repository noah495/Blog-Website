<?php
try {
  $user = 'd041e_nobuchs';
  $password = '12345_Db!!!';
  
  $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_nobuchs', $user, $password, [
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