<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Help</title>
</head>
<body>
<header>
    <h1>Help</h1>
    </header>

    <nav>
<div class="navbar">
<ul>
    <li><a href="start.php">Home</a></li>
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
<?php
$dbuser = "d041e_listuder";

// ACHTUNG: DU MUST HIER NOCH DAS PASSWORT EINSETZEN. DU FINDEST ES AUF DISCORD IM INFO CHANNEL
$dbpass = "12345_Db!!!";

$pdo = new PDO("mysql:host=mysql2.webland.ch;dbname=d041e_listuder", $dbuser, $dbpass, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

$sqlQuery = $pdo->query("SELECT * FROM blog_url");
$urls = $sqlQuery->fetchAll();
?>


</main>

    
</body>

</html>
