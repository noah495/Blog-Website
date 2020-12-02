<?php 

        include 'data.php';

?>

<?php

if($post_title === ''){
    $errors[] = 'Bitte geben Sie einen Titel ein.';
}

if($post_text === ''){
    $errors[] = 'Bitte geben Sie einen Text ein.';
}
if($created_by === ''){
    $errors[] = 'Bitte geben Sie einen Namen ein.';
	}




    //no warnings
    error_reporting(E_ALL ^ E_WARNING);
    $form = array(
        "name"=> "",
        "title"=> "",
        "text"=> "",
        "link"=> ""
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
    $stmt = $pdo->prepare('INSERT INTO post (created_by, post_title, post_text, created_at, post_link)
                                            VALUES (:created_by, :post_title, :post_text, now(), :post_link)');
    $stmt->execute([":created_by" => "$form[name]", ":post_title" => "$form[title]", ":post_text" => "$form[text]", ":post_link" => "$form[link]"]);
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
  <li><a href="start.php">Home</a></li>
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
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
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
<label>url</label><br>
<textarea rows="1" cols="100" name="link" >    
</textarea>
<br>
<input type="submit" name="submit"   value="Submit">

</div>


</main>










</body>
</html>
<?php
include('functions.php');
$isLoggedIn;
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>  