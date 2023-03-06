<HTML>
<head>
<title>
資訊管理學系
</title>
<meta charset="utf-8">
</head>
</HTML>

<meta charset="utf8">

<?php

$id = $_POST["id"];
$name = $_POST["name"];
$year = $_POST["year"];
$gender = $_POST["gender"];

echo "Thankyou for your participation,<br/>" .$name. "<br/>" .$id. "<br/>";

echo"<br/>";
if($gender=="male"){
   echo "As a male, please wear black outfit <br/>";
}else{
   echo "As a female, please wear blue outfit <br/>";
}

if(isset($_POST["paid"])){
    $paid=$_POST["paid"];
    echo "Please pay 100NTD on the day of the event <br/>";
}if(isset($_POST["unpaid"])){
    $unpaid=$_POST["unpaid"];
    echo "Please pay 150NTD on the day of the event <br/>";
}

echo "<br/>";
$comment=$_POST["comment"];
echo "Below is the copied result of your previous response : <br/>";
echo nl2br(strip_tags($comment));

echo "<br/><br/>Once again, thankyou and see you very very soon !!";

?>