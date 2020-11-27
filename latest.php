
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
<?php 
include 'data.php';
foreach($rows as $row){
  echo '<h2 class="created_by">' .$row["created_by"]. '</h2>';
  echo '<p class="created_at">' .$row["created_at"]. '</p>';
  echo '<p class="post_title">' .$row["post_title"]. '</p>';
  echo '<p class="post_text">' .$row["post_text"]. '</p>';


}

?>

</main>
</body>
</html>