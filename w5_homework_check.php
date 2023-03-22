<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
session_start();

$prid="jo";
$prpwd="1";

$tcid="jos";
$tcpwd="12";

$stid="josh";
$stpwd="123";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($prid==$id)&&($prpwd==$pwd)){
    $_SESSION["login"]="yes";
    header("Location:w5_homework_prok.php");
}else if(($tcid==$id)&&($tcpwd==$pwd)){
    $_SESSION["login"]="yes";
    header("Location:w5_homework_tcok.php");
}else if(($stid==$id)&&($stpwd==$pwd)){
    $_SESSION["login"]="yes";
    header("Location:w5_homework_stok.php");
}else{
    $_SESSION["login"]="No";
    header("Location:w5_homework_fail.php");
}

?>
</body>
</html>