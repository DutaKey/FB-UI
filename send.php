<?php
session_start();
include('config.php');
$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$status='unread';

mysql_query("INSERT INTO messages(ginhalinan, pakadtoan, content, status)VALUES('$from', '$to', '$content', '$status')");
header("location: lol.php");
mysql_close($con);
?>