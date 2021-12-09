<?php
	require_once('auth.php');
?>
 <?php
			   include('config.php');	
			   		$qqq=$_SESSION['SESS_MEMBER_ID'];		
					$commentid=$_GET['id'];
					$rrt='pending';
mysql_query("INSERT INTO friends(addedby, requested, status)VALUES('$qqq', '$commentid', '$rrt')");
header("location: lol.php");
mysql_close($con);
?>
