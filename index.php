
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$conn = mysqli_connect($server , $username, $password, $dbname);

if(isset($_POST['submit'])){

  if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['comment'])){
  $name = $_POST['name'];
  $title = $_POST['title'];
  $comment = $_POST['comment'];

  $query = "insert into form(name,title,comment) values('$name', '$title', '$comment')";
  $run = mysqli_query($conn,$query) or die('Error: ' . mysqli_error());
  
  if($run){
    echo "Form submitted successfully";
  }
  else{
    echo "Form not submitted";
  }  
  } 
else{
  echo " all fields required";
}
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
  <li><a href="">Settings</a></li>
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
<input type="text" name="name">
<br> <br>
<label>Title</label><br>
<textarea name="title" cols="30" rows="1"></textarea><br>
</label>
<br>
<label>Text</label><br>
<textarea rows="8" cols="22" name="comment">    
</textarea>
<br>
<input type="submit" name="submit"   value="Submit">

</div>


</main>










</body>
</html>