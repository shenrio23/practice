<html>
<head>
</head>



<fieldset>
<legend>Tiket Online : </legend> 
  
  <table action="tiket_online_2.php" method="GET">
    
	<tr>
    <th>Tujuan :</th>
    <td><select name="tujuan">
  <option value="Jakarta-Semarang">Jakarta-Semarang</option>
  <option value="Jakarta-Bogor">Jakarta-Bogor</option>
  <option value="Jakarta-Yogyakarta">Jakarta-Yogyakarta</option>
</select></td>
  </tr> 
  
	<tr>
    <th>Jam Keberangkatan :</th>
    <td>
  <input type="radio" name="jam" value="8.00-Laki">8.00
  <input type="radio" name="jam" value="9.00">9.00
  <input type="radio" name="jam" value="10.00">10.00
  </td>
  </tr> 
  

  <tr>
    <th>Jumlah Penumpang :</th>
    <td><input type="number" name="jml_p"></td>
  </tr> 
  

  
  
</table> <br>
    <input type="submit" name="next" value="Next">
  <input type="reset" name="reset" value="Reset">
</fieldset>  
</form>




</html>