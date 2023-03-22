<?php ob_start(); ?>
<?php session_start(); 

if($_SESSION["login"]=="No"){
   
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
登入失敗! FAIL<br>
網頁將在 10 秒後跳轉至登入頁面或<br>
<a href="w5_homework.php">點選這裡</a>

<?php
header("Refresh:10;url=w5_homework.php")
?>

</body>
</html>

<?php ob_flush(); ?>