
<form action="#" method="GET">
<h2>From Register</h2>
Masukkan Username : <input type="text" value="" name="username"> <br> <br>
Masukkan Email : <input type="email" value="" name="email"> <br> <br>
Masukkan Password :<input type="password" value="" name="password"> <br> <br>
<input type="submit" value="Submit" name="submit">
</form>

<?php
if($_GET)
{
echo "Username : ".$_GET['username']."<br>";
echo "Email : ".$_GET['email']."<br>";
echo "Password : ".$_GET['password']."<br>";
}
?>