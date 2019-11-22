<?php
// Definisi akan di set kosong sebagai default
$name = $address = $date_birth = $gender = $level_edu = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name     = $_POST["nama"];
  $address    = $_POST["alamat"];
  $date_birth  = $_POST['tgl_lhr'];
  $gender      = $_POST['jns_klmin'];
  $level_edu   = $_POST['pendidikan'];
}
?>
<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
<br/><br/>
<?php
echo '<table>';
echo '<tr><td>'.'Nama Lengkap: '.'</td><td>'.$name.'</td></tr>';
echo '<tr><td>'.'Alamat: '.'</td><td>'.$address.'</td></tr>';
echo '<tr><td>'.'Tanggal Lahir: '.'</td><td>'.$date_birth.'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$gender.'</td></tr>';
echo '<tr><td>'.'Pendidikan: '.'</td><td>'.$level_edu.'</td></tr>';
echo '</table>';
?>
</body>
</html>
