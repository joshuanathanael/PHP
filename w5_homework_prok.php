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
Welcome Principal!<br/>
<a href="w5_homework_tcok.php">Go to teacher's account</a><br/>
<a href="w5_homework.php">Logout</a>
</body>
</html>