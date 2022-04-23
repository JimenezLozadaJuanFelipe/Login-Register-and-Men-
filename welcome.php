<?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<header>

<a href="#" class="logo">Logo</a>
<ul>
    <li><a href="#" class="active">Home</a>
    <li><a href="#">Work</a>
    <li><a href="#">About</a>
    <li><a href="logout.php">Salir</a>
</li>
</ul>

</header>   
<section>
    <img src="stars.png" id="stars">
    <img src="moon.png" id="moon">
    <img src="mountains_behind.png" id="mountains_behind">
    <h2 id="text">MoonLight</h2>
    <a href="#" id="btn">Explore</a>
    <img src="mountains_front.png" id="mountains_front">



</section> 

</body>
</html>