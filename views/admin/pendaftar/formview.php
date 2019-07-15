<?php
if (isset($_GET['nisn'])) {
	$nisn = $_GET['nisn'];
} else {
	$nisn = "";
}
//========================================================Get
if (!empty($nisn)) {
	$row      = $db->select("select * from calon_siswa where nisn=?", [$nisn]);
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
	//$db->Close();
}
?>
<section id="breadcrumb">
	<ol class="breadcrumb">
		<li class="active">Dashboard/Data Calon siswa</li>
	</ol>
</section>
<div class="card">
	<h3 class="card-header text-center">Data Siswa</h3>
	<div class="card-body">
		<fieldset>
			<legend>Data Diri</legend>
			<table class="table table-responsive">
				<tr>
					<th>NISN</th>
					<td>:</td>
					<td><?php echo $nisn;?></td>
				</tr>
				<tr>
					<th>Nama</th>
					<td>:</td>
					<td><?php echo $nama;?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>:</td>
					<td><?php echo $jk;?></td>
				</tr>
				<tr>
					<th>TTL</th>
					<td>:</td>
					<td><?php echo $tempat.", ".$tgl;?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>:</td>
					<td><?php echo $alamat;?></td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>:</td>
					<td><?php echo $agama;?></td>
				</tr>
				<tr>
					<th>Nomor HP</th>
					<td>:</td>
					<td><?php echo $email;?></td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td>:</td>
					<td><?php echo $asal;?></td>
				</tr>
				<tr>
					<th>Alamat Sekolah</th>
					<td>:</td>
					<td><?php echo $almt_sek;?></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Niali UN</legend>
			<table class="table table-responsive">
				<tr>
					<th>Nilai Matematika</th>
					<td>:</td>
					<td><?php echo $mtk;?></td>
				</tr>
				<tr>
					<th>Nilai Ipa</th>
					<td>:</td>
					<td><?php echo $ipa;?></td>
				</tr>
				<tr>
					<th>Nilai Bahasa Indonesia</th>
					<td>:</td>
					<td><?php echo $bIndo;?></td>
				</tr>
				<tr>
					<th>Nilai Bahasa Inggris</th>
					<td>:</td>
					<td><?php echo $bIng;?></td>
				</tr>
				<tr>
					<th>Total Nilai</th>
					<td>:</td>
					<td><?php echo $total;?></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Data Orang Tua</legend>
			<table class="table table-responsive">
				<tr>
					<th>Nama Ayah</th>
					<td>:</td>
					<td><?php echo $ayah;?></td>
				</tr>
				<tr>
					<th>Pekerjaan Ayah</th>
					<td>:</td>
					<td><?php echo $p_ayah;?></td>
				</tr>
				<tr>
					<th>Nama Ibu</th>
					<td>:</td>
					<td><?php echo $ibu;?></td>
				</tr>
				<tr>
					<th>Pekerjaan Ibu</th>
					<td>:</td>
					<td><?php echo $p_ibu;?></td>
				</tr>
				<tr>
					<th>Nomor Telepon</th>
					<td>:</td>
					<td><?php echo $no_telp;?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>:</td>
					<td><?php echo $alamt;?></td>
				</tr>
			</table>
		</fieldset>
		<div class="row">
			<div class="col-md-1">
				<a href="./?page=form-pendaftar&action=edit&nisn=<?php echo $nisn?>"><button type="button" name="send" class="btn btn-primary">Ubah</button></a>
			</div>
			<div class="col-md-1">
				<a href="../laporan/printpdf.php?pdf=<?php echo $nisn?>" target=_"_blank"><button type="button" name="send" class="btn btn-success">Print</button></a>
			</div>
			<div class="col-md-1">
				<a href="./?page=pendaftar"><button type="button" name="send" class="btn btn-danger">Kembali</button></a>
			</div>

		</div>
	</div>
</div>
