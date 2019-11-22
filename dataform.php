<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
</head>
<body>
<form action="proses.php" method="post">
 <table>
  <tr><td>Nama Lengkap </td><td><input type="text" name="nama"></td></tr>
  <tr><td>Alamat </td><td><textarea name="alamat" width="300"></textarea></td></tr>
  <tr><td>Tanggal Lahir</td><td><input type='date' name='tgl_lhr'/></td></tr>  
  <tr><td>Jenis Kelamin</td>
   <td>
    <input type="radio" name="jns_klmin" value="Pria" checked> Pria
    <input type="radio" name="jns_klmin" value="Wanita"> Wanita
   </td>
  </tr>
  <tr><td>Pendidikan</td>
   <td>
    <select name ="pendidikan">
              <option value="SD">SD</option>
                 <option value="SMP">SMP</option>
                 <option value="SMA">SMA</option>
                 <option value="S1">S1</option>
                 <option value="S2">S2</option>
     <option value="S3">S3</option>
          </select>
   </td>
  </tr>
  <tr><td><input type="submit" value="Simpan" name="simpan"></td></tr>
 </table>
</form>
</body>
</html>
