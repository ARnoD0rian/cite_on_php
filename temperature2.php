<?php
$name = filter_var(trim($_COOKIE['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_COOKIE['surname']),FILTER_SANITIZE_STRING);
$patryonic = filter_var(trim($_COOKIE['patryonic']),FILTER_SANITIZE_STRING);
$class = filter_var(trim($_COOKIE['class']),FILTER_SANITIZE_STRING);
$temperature = filter_var(trim($_POST['temperature']),FILTER_SANITIZE_STRING);
$date=date("d-m-Y");
require "sql.php";
$mysql->query("INSERT INTO `users` ( `name`, `surname`, `patryonic`,`class`,`temperature`,`date`) VALUES ('$name', '$surname', '$patryonic','$class','$temperature','$date')") ;
$mysql->close();
header('location: lich.php' );
?>
