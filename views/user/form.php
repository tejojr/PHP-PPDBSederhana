<?php
//==============================Insert update Data==================================================================

if (isset($_POST['kirim'])) {
	$nisn    = $_POST['nisn'];
	$nama    = strtoupper($_POST['nama']);
	$jk      = $_POST['jk'];
	$tempat  = $_POST['tmp_lahir'];
	$tgl     = $_POST['tgl_lahir'];
	$alamat  = $_POST['alamat'];
	$agama   = $_POST['agama'];
	$hp      = $_POST['hp'];
	$email   = $_POST['email'];
	$asal    = $_POST['asal'];
	$alm_sek = $_POST['alm_sek'];
	$mtk     = $_POST['mtk'];
	$ipa     = $_POST['ipa'];
	$b_ind   = $_POST['b_ind'];
	$b_ing   = $_POST['b_ing'];
	$total   = $mtk+$ipa+$b_ing+$b_ind;
	$ayah    = $_POST['ayah'];
	$p_ayah  = $_POST['p_ayah'];
	$ibu     = $_POST['ibu'];
	$p_ibu   = $_POST['p_ibu'];
	$no_telp = $_POST['no_telp'];
	$alamat  = $_POST['alamat'];
	$row     = $db->select("SELECT * from calon_siswa where nisn =?", [$nisn]);
	if ($row > 0) {
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>NISN sudah ada.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	} else {
		$kirim  = $db->cud("INSERT into pendaftar values(?,?,?,?,?,?,?,?,?,?,?)", [$nisn, $nama, $jk, $tempat, $tgl, $alamat, $agama, $hp, $email, $asal, $alm_sek]);
		$kirim1 = $db->cud("INSERT into nilai values(?,?,?,?,?,?,?)", [null, $nisn, $mtk, $b_ind, $b_ing, $ipa, $total]);
		$kirim2 = $db->cud("INSERT into ortu values(?,?,?,?,?,?,?,?)", [null, $nisn, $ayah, $p_ayah, $ibu, $p_ibu, $no_telp, $alamat]);
		if ($kirim && $kirim1 && $kirim2) {
			$db->redirect('../laporan/printpdf.php?pdf='.$nisn);
		} else {
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>gagal!, silahkan cek data anda kembali .
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';

		}

	}
	$db->close();
}
?>

<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header"><h3 style="margin-top: 10px">Syarat Pendaftaran</h3></div>
			<div class="card-body">
				<pre><?php $row = $db->select("SELECT * from setting where id=?", [1]);
echo $row['syaratdaftar'];?></pre>
			</div>
		</div>
	</div>
	<div class="card-md-9">
		<div class="card">
			<h3 class="card-header text-center">Formulir Pendaftaran Siswa <?php echo $jeneng;?></h3>
			<div class="card-body">
				<form class="" action="#" method="post" enctype="multipart/form-data">
					<h4 class="card-header">Data Pribadi</h3>
						<div class="card-body">
							<div class="form-group">
								<label for="nisn">NISN</label>
								<input id="nisn" type="text" name="nisn" required="true" class="form-control" placeholder="NISN" >
							</div>
							<div class="form-group">
								<label for="nama">Nama</label> </br>
								<input type="text" name="nama" required="true" id="nama" class="form-control" placeholder="Masukan Nama Lengkap">
							</div>
							<div class="form-group">
								<label>Jenis Kelmain </label>
								<div class="radio">
									<label>
										<input type="radio" name="jk" id="l" value="L">Laki-laki
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="jk" id="p" value="P" >Perempuan
									</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="">Tempat Lahir</label>
									<input type="text" name="tmp_lahir" required="true" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="col">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tgl_lahir" required="true" class="form-control" >
								</div>
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<textarea name="alamat" rows="3" rerquired="true" class="form-control" ></textarea>
							</div>
							<div class="form-group">
								<label for="">Agama</label>
								<select class="form-control" name="agama">
									<option>Pilih Agamamu</option>
<?php
$a = $db->selectall("SELECT * from agama");
foreach ($a as $row) {
	echo "<option value='$row[id]'>$row[nama]</option>";
}
?>
								</select>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="">Nomor HP</label>
									<input type="number" name="hp" required class="form-control">
								</div>
								<div class="col">
									<label for="">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="">Asal Sekolah</label>
									<input type="text" name="asal" class="form-control"  >
								</div>
								<div class="col">
									<label for="">Alamat Sekolah</label>
									<input type="text" name="alm_sek" class="form-control" \>
								</div>
							</div>
						</div>
						<h4 class="card-header">Form Nilai UN</h4>
						<div class="card-body">
							<div class="form-row">
								<div class="col">
									<label for="">Matematika</label>
									<input type="number" name="mtk" required class="form-control" >
								</div>
								<div class="col">
									<label for="">IPA</label>
									<input type="number" name="ipa" class="form-control" required >
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="">Bahasa Inggris</label>
									<input type="number" name="b_ind" class="form-control" required >
								</div>
								<div class="col">
									<label for="">Bahasa Indonesia</label>
									<input type="number" name="b_ing" class="form-control" required>
								</div>
							</div>
						</div>
						<h4 class="card-header">Data Orang Tua</h4>
						<div class="card-body">
							<div class="form-row">
								<div class="col">
									<label for="">Ayah</label>
									<input type="text" name="ayah" required class="form-control" >
								</div>
								<div class="col">
									<label for="">Pekerjaan Ayah</label>
									<input type="text" name="p_ayah" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label for="">Ibu</label>
									<input type="text" name="ibu" class="form-control" >
								</div>
								<div class="col">
									<label for="">Pekerjaan Ibu</label>
									<input type="text" name="p_ibu" class="form-control" >
								</div>
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<textarea name="alamat" rows="3" rerquired="true" class="form-control" ></textarea>
							</div>
							<div class="form-group">
								<label for="nama">Nomor Telepon</label> </br>
								<input type="text" name="no_telp" required="true" class="form-control">
							</div>
							<div class="form-group row">
								<div class="col-md-2">
									<button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
								</div>
								<div class="col-md-2">
									<button type="reset" name="reset" class="btn btn-danger">Reset</button>
								</div>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>