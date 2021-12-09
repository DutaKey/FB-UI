<?php
include('config.php');
$a=$_GET['id'];
mysql_query("DELETE FROM comment WHERE id='$a'");
header ("location: lol.php");
mysql_close($con);
?>