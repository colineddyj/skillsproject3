<?php  session_start(); ?>

<?php
	$servername='localhost';
	$username='id20802788_root';
	$password='Hal!faxCano3';
	$dbname = "id20802788_db_halifaxcanoe";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a><img src="images/hamburgericon.png" class="hamburger" alt="hamburger icon"></a>
        <h2>Halifax Canoe and Kayak</h2>
        <img src="images/companylogo.png" class="logo" alt="company logo">
    </header>
<nav class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="all-adventures.php">Upcoming Adventures</a></li>
        <li><a href="admin-add.php">Post an Adventure</a></li>
    </ul>
</nav>