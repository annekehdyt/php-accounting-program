<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
	<input type="text" name="name"/>
	<input type="submit" name="Submit"/>
</form>
</br>

<?php
if(isset($_POST['name'])){
	$name = htmlentities($_POST['name']);
	if(!empty($name)){
		echo 'Your input is '.$name;
	}
}

?>