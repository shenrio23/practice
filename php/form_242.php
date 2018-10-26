
<form action="#" method="POST">
<h2>From Register</h2>
Masukkan Username : <input type="text" value="" name="username"> <br> <br>
Masukkan Email : <input type="email" value="" name="email"> <br> <br>
Masukkan Password :<input type="password" value="" name="password"> <br> <br>
<input type="submit" value="Submit" name="submit">
</form>

<?php
if($_POST)
{
echo "Username : ".$_POST['username']."<br>";
echo "Email : ".$_POST['email']."<br>";
echo "Password : ".$_POST['password']."<br>";
}
?>