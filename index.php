






<?php 

      include 'data.php';
        
?>

<?php
    //no warnings
    error_reporting(E_ALL ^ E_WARNING);
    $form = array(
        "name"=> "",
        "title"=> "",
        "text"=> ""
    );
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach($form as $n => $value){
            $form[$n] = $_POST[$n] ?? "";
        }
        $okToSend = true;
    }
?>


<?php

$okToSend = true;
if ($okToSend){
    $stmt = $pdo->prepare('INSERT INTO post (created_by, post_title, post_text, created_at)
                                            VALUES (:created_by, :post_title, :post_text, now())');
    $stmt->execute([":created_by" => "$form[name]", ":post_title" => "$form[title]", ":post_text" => "$form[text]"]);
}
?>

    







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
    <header>
    <h1> The Blogger</h1>
    <p>Stories for everyone</p>
    
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
  <li><a href="register.php">Settings</a></li>
</div>
</ul>
</div>
</nav>
<main> 
<h1>Hello!</h1>
<p>Post your own Blog now, and share your expieriences with the whole world!</p>

<h2>Create your Blog</h2>
<br>

<div class="makeblog">
<form action="" method="post">
<label>Name</label><br>
<input type="text" name="name" cols="32">
<br> <br>
<label>Title</label><br>
<textarea name="title" cols="60" rows="1" ></textarea><br>
</label>
<br>
<label>Text</label><br>
<textarea rows="50" cols="190" name="text" >    
</textarea>
<br>
<input type="submit" name="submit"   value="Submit">

</div>


</main>










</body>
</html>