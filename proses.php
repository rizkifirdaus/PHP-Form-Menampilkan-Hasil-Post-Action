<?php
if(isset($_POST['simpan'])){
echo '<table>';
echo '<tr><td>'.'Nama Lengkap: '.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'Alamat: '.'</td><td>'.$_POST['alamat'].'</td></tr>';
echo '<tr><td>'.'Tanggal Lahir: '.'</td><td>'.$_POST['tgl_lhr'].'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$_POST['jns_klmin'].'</td></tr>';
echo '<tr><td>'.'Pendidikan: '.'</td><td>'.$_POST['pendidikan'].'</td></tr>';
echo '</table>';
}
?>
