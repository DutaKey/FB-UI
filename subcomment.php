<?php
session_start();
include('config.php');
$commentid=$_POST['commentid'];
$subcommentcontent=$_POST['subcommentcontent'];
$subcommentname=$_POST['subcommentname'];

mysql_query("INSERT INTO subcomment(subcommentid, subcommentname, content)VALUES('$commentid', '$subcommentname', '$subcommentcontent')");
header("location: lol.php");
mysql_close($con);
?>