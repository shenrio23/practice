
<form action="?action=edit" method="POST">
<h2>From Register</h2>
Masukkan Username : <input type="text" value="" name="username"> <br> <br>
Masukkan Email : <input type="email" value="" name="email"> <br> <br>
Masukkan Password :<input type="password" value="" name="password"> <br> <br>
<input type="hidden" value="insert" name="action">
<input type="submit" value="Submit" name="submit">
</form>

<?php
if($_POST)
{
	print_r($_GET);
	echo"<br>";echo"<br>";
	print_r($_POST);
	echo"<br>";echo"<br>";
	print_r($_REQUEST);

}
?>