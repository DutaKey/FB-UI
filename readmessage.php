<?php
	require_once('auth.php');
?>
 <?php
			   include('config.php');			
					$commentid=$_GET['id'];
					$rrt='read';
								$update=mysql_query("UPDATE messages SET status='$rrt' WHERE id='$commentid'");
								$result3 = mysql_query("SELECT * FROM messages where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  $to=$row3['ginhalinan'];
			  		echo $row3['content'];
								  
								  }
?>
<?php
echo '<form action="send.php" method="post">';
echo '<input name="to" type="hidden" value="'.$to.'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
echo '<textarea name="content" cols="60" rows="4"></textarea>'.'<br>';
echo '<input name="send" type="submit" value="Send">';
echo '</form>';
?>
