
<fieldset>
<legend>Tiket Online : </legend> 
<?php

if(isset ($_POST['submit'])){

	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	
	$dirUpload = "uploads/";
	
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
	
	if($terupload){
		echo "<img src='".$dirUpload.$namaFile."'><br>";
	}
} 

echo "<br>";
?>

<table>
  <tr>
    <th>Tujuan :</th>
    <td><?php echo $tujuan; ?></td>
  </tr>
  
  <tr>
    <th>Jam :</th>
    <td><?php echo $jam; ?></td>
  </tr>
  
  <tr>
    <th>Nama Penumpang :</th>
    <td><?php echo $nm_penumpang; ?></td>
  </tr>
  
  
  
 
 </table>

 
<?php echo "============================================================================================="; ?>
</fieldset>  