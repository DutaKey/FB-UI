<?php
	require_once('auth.php');
?>
<?php
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			  
			  echo '<div>';
			  echo '<div style="float:left">';
			  echo '<div style="float:left">';
			  		echo '<img src="'.$row1['profilepic'].'" height="30" width="30">';
					echo '</div>';
					echo '<div style="float:right">';
					echo $row1['fname'].' '.$row1['lname'];
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right">';	
					echo '<a rel="facebox" href=confirm.php?id='.$row3["id"] .'&amp;'.'addedby='.$row3["addedby"].' title="Click to Confirm Request">'.'confirm'.'</a>';
					echo ' | ';
					echo '<a rel="facebox" href=deleterequest.php?id='.$row3["id"] .' title="Click to Delete Request">'.'not now'.'</a>';
					echo '</div>';
			   echo '</div>';
			   echo '<br><br>';
			   
								  }
								  }
				?>