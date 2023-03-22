<?php 
session_start();

if($_SESSION["login"]=="yes"){
   
}else{
   header("Location:w5_homework_error.php");
}
?>

<html>

<head>
<meta charset="utf-8">
<title>Week 5</title>
</head>

<body>
Welcome teacher!<br/>
<a href="w5_homework_stok.php">Go to students' account</a><br/>
<a href="w5_homework.php">Logout</a>
</body>
</html>