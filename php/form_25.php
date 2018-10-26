<form action="#" method="POST" enctype="multipart/form-data">
<h2>From Register</h2>
Pilih file : <input type="file" name="berkas" value="""> <br><br>
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset" name="reset">
</form>

<?php
if(isset($_POST['submit'])){
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	
	$dirUpload = "uploads/";
	
	$terupload = move_uploaded_file($namaSementara, @dirUpload.@namaFile);
	
	if ($terupload){
		echo "Upload berhasil!! <br>";
		echo "Link <a href='".@dirUpload.$namaFile."'>".$namaFile."</a>";
	} else {
		echo "upload gagal!";
	}
}
?>