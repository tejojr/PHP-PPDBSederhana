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
		$row     = $db->select("SELECT * from ortu where nisn=?", [$nisn]);
		$btn     = "Edit";
		$ayah    = $row['ayah'];
		$p_ayah  = $row['p_ayah'];
		$ibu     = $row['ibu'];
		$p_ibu   = $row['p_ibu'];
		$no_telp = $row['no_telp'];
		$alamat  = $row['alamat'];
		//$db->Close();
	}
} else {
	$btn     = "Simpan";
	$ayah    = "";
	$p_ayah  = "";
	$ibu     = "";
	$p_ibu   = "";
	$no_telp = "";
	$alamat  = "";
}
?>
<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/ Form Pendaftaran</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header text-center">Fomulir Data Orang Tua</h3>
  <div class="card-body">
  	  <form class="" action="#" method="post">
  	<div class="form-row">
      <div class="col">
        <label for="">Ayah</label>
        <input type="text" name="ayah" required class="form-control" value="<?php echo $ayah;?>" >
      </div>
      <div class="col">
        <label for="">Pekerjaan Ayah</label>
        <input type="text" name="p_ayah" class="form-control" value="<?php echo $p_ayah?> " required>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="">Ibu</label>
        <input type="text" name="ibu" class="form-control" value="<?php echo $ibu?> " >
      </div>
      <div class="col">
        <label for="">Pekerjaan Ibu</label>
        <input type="text" name="p_ibu" class="form-control" value="<?php echo $p_ibu;?> ">
      </div>
    </div>
     <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="3" rerquired="true" class="form-control" ><?php echo $alamat?></textarea>
     </div>
      <div class="form-group">
        <label for="nama">Nomor Telepon</label> </br>
        <input type="text" name="no_telp" required="true" class="form-control" value="<?php echo $no_telp?>" >
      </div>
    <div class="form-group row">
      <div class="col-md-1">
        <button type="submit" name="send" class="btn btn-primary"><?php echo "$btn"?></button>
      </div>
      <div class="col-md-2">
<?php if ($aksi == "edit"):?>
<a href="./?page=pendaftar"><button type="button" name="kembali" class="btn btn-danger">Batal</button></a>
<?php endif?>
      <?php if ($aksi == ""):?>
<button type="reset" name="hapus" class="btn btn-danger">Reset</button>
<?php endif?>
</div>
    </div>
  </div>
</form>
</div>
</div>
<?php
//==============================Insert update Data==================================================================
if (isset($_POST['send'])) {
	$ayah    = $_POST['ayah'];
	$p_ayah  = $_POST['p_ayah'];
	$ibu     = $_POST['ibu'];
	$p_ibu   = $_POST['p_ibu'];
	$no_telp = $_POST['no_telp'];
	$alamat  = $_POST['alamat'];
	if ($aksi == "edit") {
		$update = $db->cud("UPDATE ortu SET ayah =?, p_ayah=?, ibu =?, p_ibu=?, no_telp=?, alamat =?  WHERE nisn=?", [$ayah, $p_ayah, $ibu, $p_ibu, $no_telp, $alamat, $nisn]);
	} else {
		$kirim = $db->cud("INSERT into ortu values(?,?,?,?,?,?,?,?)", [null, $nisn, $ayah, $p_ayah, $ibu, $p_ibu, $no_telp, $alamat]);
		//$db->redirect('./?page=form-pendaftar');
	}
	$db->redirect('./?page=form-data');
	$db->close();
}
ob_end_flush();
?>