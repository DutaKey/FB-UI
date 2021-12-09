<?php
	require_once('auth.php');
?>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<?php
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['ginhalinan'];
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
					echo '<a rel="facebox" href=readmessage.php?id='.$row3["id"] .' title="Click to read message">'.'Read'.'</a>';
					echo '</div>';
			   echo '</div>';
								  }
								  }
				?>