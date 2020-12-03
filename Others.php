<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Other Blogs</title>
</head>
<body>
<header>
    <h1>Other Blogs</h1>
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
    <li><a href="others.php">Others</a></li>
    <li><a href="">Settings</a></li>
</div>  
</ul>
</div>
</nav>

<main>


<?php
$dbuser = "d041e_listuder";
    $dbpass = "12345_Db!!!";

    $dbConnection = new PDO("mysql:host=mysql2.webland.ch;dbname=d041e_listuder", $dbuser, $dbpass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    $sqlQuery = $dbConnection->query("SELECT * FROM blog_url");
    $urls = $sqlQuery->fetchAll();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kollegen</title>
    <link rel="stylesheet" href="blog.css">
</head>

<body class="body">
    <h1>Andere Blogs</h1>

    <?php include("nav.php");?>
    <br><br>
</body>
</html>

'<p class= "list">'
<?php
foreach($urls as $url) {
         $link = '<li><a href="' . $url["blogUrl"] . '" target="_blank">' . $url["blogAuthor"] . 's Blog' . '</a>' . '</li><br>';

        echo $link;
        }
?>
'</p>'


</main>

    
</body>

</html>
