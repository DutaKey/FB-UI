<?php
	require_once('auth.php');
?>
<?php
			   include('config.php');			
					$commentid=$_GET['id'];
					$addedby=$_GET['addedby'];
					$rrt='accepted';
					$requested=$_SESSION['SESS_MEMBER_ID'];
					$update=mysql_query("UPDATE friends SET status='$rrt' WHERE id='$commentid'");
					mysql_query("INSERT INTO friends(addedby, requested, status)VALUES('$requested', '$addedby', '$rrt')");
					header("location: lol.php");
?>