<?php
session_start();
include('config.php');
$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$time=time();

mysql_query("INSERT INTO comment(commentid, content, name, pakadtoan, created)VALUES('$to', '$content', '$from', '$to', '$time')");
header("location: profile.php?id=$to");
mysql_close($con);
?>