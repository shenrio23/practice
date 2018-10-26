



<fieldset>
<legend>Tiket Online : </legend> 
  
<form>


<?php

if($_POST){
	$tujuan=$_POST['tujuan'];
	$jam=$_POST['jam'];
	@jumlah=$_POST['jumlah'];
	for ($i=1; $i<=$jumlah;$i++)
		echo"<table >
    <tr>
    <th>Nama Penumpang :</th>
    <td><input type="text" name="nm_penumpang"></td>
  </tr>
</table>"
}

?>
 <br>


<input type="hidden" name="tujuan2" value="<?php echo $tujuan;?>">
<input type="hidden" name="jam2" value="<?php echo $jam;?>">
    <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</fieldset>  
</form>



