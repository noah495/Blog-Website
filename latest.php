
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO blog (name, title, comment)
VALUES ('".$_POST["name"]."','".$_POST["title"]."','".$_POST["comment"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Blogs</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <h1>Latest Blogs</h1>
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
    <div class="inline">
    <div class="left">
        <h2>Blog by ...</h2>
        <h3>Underwater President</h3>
        <!-- <p> The ice is melting, the world is warming, and the oceans are rising. Richer countries bear most of the responsibility for  -->
            <!-- global warming, but poorer island countries like the Maldives are the first to bear the brunt of rising waters. -->
            <!-- The Maldives are a chain of islands famous … </p> -->
            <!-- <img class="img" src="static/img/sea.jpg" alt="sea" height= 400px width= 460px> -->
    </div>
    <div class="center">
    <h2>Blog by ...</h2>
        <h3>Underwater President</h3>

    </div>
    <div class="right">
    <h2>Blog by ...</h2>
        <h3>Underwater President</h3>

    </div>

    </div>
</main>
</body>
</html>