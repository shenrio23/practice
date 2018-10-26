<html>
<head>
<style>
table, th, td {
    border: 1px solid #f4f4f4;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>
<body>  

<?php
$name = $gender = $alamat = $tempatlahir = $tanggallahir = $nohp = $agama = $hobi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $tempatlahir = test_input($_POST["tempatlahir"]);
  $tanggallahir = test_input($_POST["tanggallahir"]);
  $alamat = test_input($_POST["alamat"]);
  $nohp = test_input($_POST["nohp"]);
  $agama = test_input($_POST["agama"]);
  $gender = test_input($_POST["gender"]);
  $hobi = test_input($_POST["hobi"]);
}

function test_input($data) {
  $data = trim($data);
  return $data;
}
?>

<form method="POST" action="#" enctype="multipart/form-data">
<fieldset style="border-radius: 10px 10px 10px 10px;">
<legend><h3>Isi Biodata : </h3></legend> 
  
  <table style="width:100%;">
  <tr>
    <th>Nama :</th>
    <td><input type="text" name="name"></td>
  </tr>
  
  <tr>
    <th>Alamat :</th>
    <td><textarea name="alamat" rows="3" cols="40"></textarea></td>
  </tr>
  
  <tr>
    <th>Tempat Lahir :</th>
    <td><input type="text" name="tempatlahir"></td>
  </tr>
  
  <tr>
    <th>Tanggal Lahir :</th>
    <td><input type="date" name="tanggallahir"></td>
  </tr>  
  
  <tr>
    <th>Nomor Hape :</th>
    <td><input type="number" name="nohp"></td>
  </tr> 
  
  <tr>
    <th>Jenis Kelamin :</th>
    <td>
  <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
  <input type="radio" name="gender" value="Perempuan">Perempuan</td>
  </tr> 
  
  <tr>
    <th>Agama :</th>
    <td><select name="agama">
  <option value="Islam">Islam</option>
  <option value="Kristen Protestan">Kristen Protestan</option>
  <option value="Kristen Katolik">Kristen Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddha">Buddha</option>
  <option value="Konghucu">Konghucu</option>
</select></td>
  </tr> 
  
  <tr>
    <th>Hoby :</th>
    <td>
  <input type="checkbox" name="hobi" value="Tidur"> Tidur
<input type="checkbox" name="hobi" value="Tidur lagi"> Tidur Lagi
<input type="checkbox" name="hobi" value="Tidur lagi dan lagi"> Tidur lagi dan lagi</td>
  </tr> 
  
  <tr>
    <th>Foto :</th>
    <td><input type="file" name="berkas" value=""></td>
  </tr>

  
  
</table> <br>
    <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</fieldset>  
</form>

<fieldset style="border-radius: 10px 10px 10px 10px;">
<legend><h3>Hasilnya : </h3></legend> 
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

<table style="width:100%">
  <tr>
    <th>Nama:</th>
    <td><?php echo $name; ?></td>
  </tr>
  
  <tr>
    <th>Alamat :</th>
    <td><?php echo $alamat; ?></td>
  </tr>
  
  <tr>
    <th>Tempat Lahir :</th>
    <td><?php echo $tempatlahir; ?></td>
  </tr>
  
  <tr>
    <th>Tanggal Lahir :</th>
    <td><?php echo $tanggallahir; ?></td>
  </tr>  
  
  <tr>
    <th>Nomor Hape :</th>
    <td><?php echo $nohp; ?></td>
  </tr> 
  
  <tr>
    <th>Jenis Kelamin :</th>
    <td><?php echo $gender; ?></td>
  </tr> 
  
  <tr>
    <th>Agama :</th>
    <td><?php echo $agama; ?></td>
  </tr> 
  
  <tr>
    <th>Hoby :</th>
    <td><?php echo $hobi; ?></td>
  </tr>

</table>
</fieldset>  