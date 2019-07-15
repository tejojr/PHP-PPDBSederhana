<?php
$dokumen = 'Formulir Pendaftaran Siswa';//Nama Dokumen
define('_MPDF_PATH', '../../report/');//letak folder mpdf
include _MPDF_PATH."mpdf.php";//panggil mpdf.php
$mpdf = new mPDF('utf-8', 'A4');// Create new mPDF Document
ob_start();

if (isset($_GET['pdf'])) {
	$nisn = $_GET['pdf'];
} else {
	$nisn = "";
}
;
include_once '../../inc/Database.php';
$db       = new Database();
$row      = $db->select("SELECT * from calon_siswa where nisn=?", [$nisn]);
$row1     = $db->select("SELECT * from f_header where id=?", [1]);
$sekolah  = $row1['nama'];
$nisn     = $row['nisn'];
$nama     = $row['nama'];
$jk       = $row['jk'];
$tempat   = $row['tmp_lahir'];
$tgl      = $row['tgl_lahir'];
$alamat   = $row['alamat'];
$agama    = $row['agama'];
$hp       = $row['hp'];
$email    = $row['email'];
$asal     = $row['asal_sek'];
$almt_sek = $row['almt_sek'];
$mtk      = $row['mtk'];
$ipa      = $row['ipa'];
$bIndo    = $row['b_indo'];
$bIng     = $row['b_ing'];
$total    = $row['total'];
$ayah     = $row['ayah'];
$p_ayah   = $row['p_ayah'];
$ibu      = $row['ibu'];
$p_ibu    = $row['p_ibu'];
$no_telp  = $row['no_telp'];
$alamt    = $row['alamat'];
?>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td colspan="3" align="center"><h1>FORMULIR PENDAFTARAN</h1></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><h1><?php echo $sekolah;?></h1></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><hr></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>A.&nbsp;Data pribadi</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			NISN</td>
			<td>:</td>
			<td><?php echo $nisn;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama</td>
			<td>:</td>
			<td><?php echo $nama;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Jenis Kelamin</td>
			<td>:</td>
			<td><?php if ($jk == "L") {
	echo 'Laki-laki';
} else {
	echo 'Perempuan';
}?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			TTL</td>
			<td>:</td>
			<td><?php echo $tempat.", ".$tgl;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Alamat</td>
			<td>:</td>
			<td><?php echo $alamat;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Agama</td>
			<td>:</td>
			<td><?php echo $agama;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nomor HP</td>
			<td>:</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			E-mail</td>
			<td>:</td>
			<td><?php echo $asal;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Alamat Sekolah</td>
			<td>:</td>
			<td><?php echo $almt_sek;?></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>B.&nbsp;NIlai UN</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Matematika</td>
			<td>:</td>
			<td><?php echo $mtk;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Ipa</td>
			<td>:</td>
			<td><?php echo $ipa;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Bahasa Indonesia</td>
			<td>:</td>
			<td><?php echo $bIndo;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Bahasa Inggris</td>
			<td>:</td>
			<td><?php echo $bIng;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Total Nilai</td>
			<td>:</td>
			<td><?php echo $total;?></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>C.&nbsp;Data Orang Tua</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama Ayah</td>
			<td>:</td>
			<td><?php echo $ayah;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Pekerjaan Ayah</td>
			<td>:</td>
			<td><?php echo $p_ayah;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama Ibu</td>
			<td>:</td>
			<td><?php echo $ibu;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Pekerjaan Ibu</td>
			<td>:</td>
			<td><?php echo $p_ibu;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nomor Telepon</td>
			<td>:</td>
			<td><?php echo $no_telp;?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Alamat</td>
			<td>:</td>
			<td><?php echo $alamt;?></td>
		</tr>


		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>

	</table>
	<table border="0">
		<tr>
			<td width="295">&nbsp;</td>
			<td width="406">&nbsp;</td>
		</tr>
		<tr>
			<td align="center">Mengetahui</td>
			<td align="center">Purbalingga, <?php echo date("d-m-y");?> </td>

		</tr>
		<tr>
			<td align="center">Orang Tua/Wali </td>
			<td align="center">Yang membuat Pernyataan </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td align="center" ><strong><u><?php echo "$ayah";?></u></strong></td>
			<td align="center"><strong><u><?php echo "$nama";?></u></strong></td>
		</tr>
	</table>

</body>
</html>
<?php

$html = ob_get_contents();//Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf", 'I');
exit;
?>