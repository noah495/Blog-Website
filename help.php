<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Help</title>
</head>
<body>
<header>
    <h1>Help</h1>
    </header>

    <nav>
<div class="navbar">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="">Profile</a></li>
  <li><a href="latest.php">Latest Blogs</a></li>
  <div class="others">
  <li><a href="">News</a></li>
  <li><a href="">About us</a></li>
  <li><a href="help.php">Help</a></li>
  <li><a href="">Settings</a></li>
</div>  
</ul>
</div>
</nav>

<main>



</main>






<?php
    $user = 'root';
    $password = '';
    $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    $name_array = array();
    $time_array = array();
    $text_array = array();
    $title_array = array();
    $y = 0;
    $stmt = $pdo->query('SELECT created_by FROM `post`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $name_array[$nr] =  "$x[0]";
    }  
    $stmt = $pdo->query('SELECT created_at FROM `post`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $time_array[$nr] =  "$x[0]";
    }  
    $stmt = $pdo->query('SELECT post_title FROM `post`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $title_array[$nr] =  "$x[0]";
        $y++;
    } 
    $stmt = $pdo->query('SELECT post_text FROM `post`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $text_array[$nr] =  "$x[0]";
    }  
?>

    <div class="formcard">
<form action="/page.php">
<table style="width:100%">
</tr>
    <label for="title"></label>
    <input type="text" id="title" name="title" value="Title" onfocus="this.value='';">
</tr>
<tr>
    <label for="text"></label>
    <textarea rows="10" cols="50" placeholder="Your Text"></textarea><br>
</tr>
<tr> 
    <label for="name"></label>
    <input type="" id="name" name="name" value="Your Nickname" onfocus="this.value='';">
</tr>
<tr>
    <input class="submit" type="submit" value="Submit">
</tr>
</table>
</form> 
</div>
</body>
</html>