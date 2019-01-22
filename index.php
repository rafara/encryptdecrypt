<?php>

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	date_default_timezone_set('UTC');

	$decode = "";
	$encode = "";
	$passphrase = "passphrase";
	$key = "identifier";
	$ver = "0";

	
?>
<form action="./handler.php" method="post" >

<input type="submit" name="submit" value="Submit" />

	<br/><br/>
	<label>Passphrase</label>
	<input type="text" name="passphrase" value="<?= $passphrase ?>" maxlength="52"/>
	<br/>
	
	<label>Identifier</label>
	<input type="text" name="key" value="<?= $key ?>" maxlength="52"/>
	<br/>

	<label>Version</label>
	<input type="text" name="ver" value="<?= $ver ?>" maxlength="52"/>
	<br/><br/><br/>



	<label>Encrypt</label>
	<input type="text" name="encode" value="<?= $encode ?>" maxlength="52428888888"/>
	<br/>
	
	<label>Decyrpt</label>
	<input type="text" name="decode" value="<?= $decode ?>" maxlength="52428888888"/>
	<br/>

</form>
</html>
