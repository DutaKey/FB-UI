<?php
	require_once('auth.php');
?>
<?php
echo '<form action="send.php" method="post">';
echo '<input name="to" type="hidden" value="'.$_GET['id'].'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
echo '<textarea name="content" cols="60" rows="4"></textarea>'.'<br>';
echo '<input name="send" type="submit" value="Send">';
echo '</form>';
?>

