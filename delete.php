<?php
	if(isset($_POST['submit'])) { 
		unlink('./private.key');
		unlink('./public.key');
		
		echo 'Keys have been deleted.<br />';
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Are you sure you wish to delete your Private/Public Keys?<br />
	<input type="submit" name="submit" value="Yes"><br>
</form>
<a href="index.php" />Return</a>