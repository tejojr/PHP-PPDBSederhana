<?php
ob_start();
if (isset($_GET['action'])) {
	$aksi = $_GET['action'];
} else {
	$aksi = "";
}

if (isset($_GET['nisn'])) {
	$nisn = $_GET['nisn'];
} else {
	$nisn = "";
}
//=========================================================Get Aksi=============================================
if ($aksi) {
	if ($aksi == "edit" && !empty($nisn)) {
		$row = $db->select("select * from pendaftar where nisn=?", [$nisn]);
		$btn = "Edit";
		$nisn = $row['nisn'];
		$nama = $row['nama'];
		$jk = $row['jk'];
		$tempat = $row['tmp_lahir'];
		$tgl = $row['tgl_lahir'];
		$alamat = $row['alamat'];
		$idAgama = $row['id_agama'];
		$hp = $row['hp'];
		$email = $row['email'];
		$asal = $row['asal_sek'];
		$almt_sek = $row['almt_sek'];
		//$db->Close();
	} else if ($aksi == "delete" && !empty($nisn)) {
		$result = $db->cud("delete from pendaftar where nisn=?", [$nisn]);
		header('location:./?page=pendaftar');
		$db->Close();
	}
} else {
	$btn = "Simpan";
	$nisn = "";
	$nama = "";
	$jk = "";
	$tempat = "";
	$tgl = "";
	$alamat = "";
	$idAgama = "";
	$hp = "";
	$email = "";
	$asal = "";
	$almt_sek = "";
}
?>
  <section id="breadcrumb">
    <ol class="breadcrumb">
      <li class="active">Dashboard/Fomulir Pendaftaran</li>
    </ol>
  </section>
<div class="card">
  <h3 class="card-header text-center">Form Pribadi</h3>
  <div class="card-body">
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nisn">NISN</label>
        <input id="nisn" type="text" name="nisn" required="true" class="form-control" placeholder="NISN" value="<?php echo $nisn ?>">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label> </br>
        <input type="text" name="nama" required="true" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="<?php echo $nama ?>" >
      </div>
      <div class="form-group">
        <label>Jenis Kelmain </label>
        <div class="radio">
          <label>
            <input type="radio" name="jk" id="l" value="L" <?php echo $jk == "L" ? "checked" : " " ?>>Laki-laki
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="jk" id="p" value="P" <?php echo $jk == "P" ? "checked" : " " ?>>Perempuan
          </label>
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <label for="">Tempat Lahir</label>
          <input type="text" name="tmp_lahir" required="true" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat ?>">
        </div>
        <div class="col">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" required="true" class="form-control" value="<?php echo $tgl ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="3" rerquired="true" class="form-control" ><?php echo $alamat ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Agama</label>
        <select class="form-control" name="agama">
          <option>Pilih Agamamu</option>
<?php
$a = $db->selectall("SELECT * from agama");
foreach ($a as $row) {
	if ($row[id] == $idAgama) {
		$select = "selected";
	} else {
		$select = "";
	}
	echo "<option value='$row[id]' $select >$row[nama]</option>";
}

?>
      </select>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="">Nomor HP</label>
        <input type="number" name="hp" required class="form-control" value="<?php echo $hp; ?>" >
      </div>
      <div class="col">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email ?> " required>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="">Asal Sekolah</label>
        <input type="text" name="asal" class="form-control" value="<?php echo $asal ?> " >
      </div>
      <div class="col">
        <label for="">Alamat Sekolah</label>
        <input type="text" name="alm_sek" class="form-control" value="<?php echo $almt_sek; ?> ">
      </div>
    </div>
    <div class="form-group">
      <label for="">Foto</label>
      <div class="custom-file">
        <input type="file" name="foto" class="custom-file-input">
        <label for="" class="custom-file-label">Pilih File</label>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-1">
        <button type="submit" name="kirim" class="btn btn-primary"><?php echo "$btn" ?></button>
      </div>
      <div class="col-md-2">
<?php if ($aksi == "edit"): ?>
<a href="./?page=pendaftar"><button type="button" name="kembali" class="btn btn-danger">Batal</button></a>
<?php endif?>
      <?php if ($aksi == ""): ?>
<button type="reset" name="reset" class="btn btn-danger">Reset</button>
<?php endif?>
</div>
    </div>
  </div>
</form>
</div>
</div>
<?php
//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {
	$nisn = $_POST['nisn'];
	$nama = strtoupper($_POST['nama']);
	$jk = $_POST['jk'];
	$tempat = $_POST['tmp_lahir'];
	$tgl = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$hp = $_POST['hp'];
	$email = $_POST['email'];
	$asal = $_POST['asal'];
	$alm_sek = $_POST['alm_sek'];

	//move_uploaded_file($src, "assets/foto/".$tGambar);
	if ($aksi == "edit") {
		$update = $db->cud("UPDATE pendaftar SET nama =?, jk=?, tmp_lahir =?, tgl_lahir=?, alamat=?, id_agama =?,  hp=?, email=?, asal_sek=?, almt_sek=? WHERE nisn=?", [$nama, $jk, $tempat, $tgl, $alamat, $agama, $hp, $email, $asal, $alm_sek, $nisn]);
		$db->redirect('./?page=form-nilai&action=edit&nisn=' . $nisn);
	} else {
		$kirim = $db->cud("INSERT into pendaftar values(?,?,?,?,?,?,?,?,?,?,?)", [$nisn, $nama, $jk, $tempat, $tgl, $alamat, $agama, $hp, $email, $asal, $alm_sek]);
		$db->redirect('./?page=form-nilai&nisn=' . $nisn);
	}

	$db->close();
}
ob_end_flush();
?>