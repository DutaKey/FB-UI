<?php
session_start();
include('config.php');
$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$pakadtoan=$_POST['pakadtoan'];
$time=time();

mysql_query("INSERT INTO comment(commentid, content, name, pakadtoan, created)VALUES('$to', '$content', '$from', '$pakadtoan', '$time')");
header("location: lol.php");
mysql_close($con);
?>