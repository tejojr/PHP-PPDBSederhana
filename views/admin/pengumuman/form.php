<?php
ob_start();
$id = 1;

if (!empty($id)) {
	$row = $db->select("SELECT * FROM setting WHERE id=?", [$id]);
	$buka_daftar = $row['buka_daftar'];
	$tutup_daftar = $row['tutup_daftar'];
	$buka_pengumuman = $row['buka_pengumuman'];
	$tutup_pengumuman = $row['tutup_pengumuman'];
	$kuota = $row['kuota'];
	$cara = $row['caradaftar'];
	$syarat = $row['syaratdaftar'];
	$kunci = $row['kunci'];

}

?>
<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/Setting</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header text-center">Setting PPDB</h3>
  <div class="card-body">
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <div></div>
      <div class="form-group row">
        <div class="col">
          <label>Pembukaan Pendaftaran</label>
          <input type="datetime-local" class="form-control" placeholder="Select tanggal" name="buka_daftar" value="<?php echo $buka_daftar ?>">
        </div>
        <div class="col">
          <label>Penutupan Pendaftaran</label>
          <input type="datetime-local" class="form-control" placeholder="Select tanggal" name="tutup_daftar" value="<?php echo $tutup_daftar ?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label>Pembukaan Pengumuman</label>
          <input type="datetime-local" class="form-control" placeholder="Select tanggal" name="buka_pengumuman" value="<?php echo $buka_pengumuman ?>">
        </div>
        <div class="col">
          <label>Penutupan Pengumuman</label>
          <input type="datetime-local" class="form-control" placeholder="Select tanggal" name="tutup_pengumuman" value="<?php echo $tutup_pengumuman ?>">
        </div>
      </div>
      <div class="form-group">
        <label>Kuota Siswa Diterima</label>
        <input type="number" name="kuota" required="true" class="form-control" placeholder="masuk Jumlah siswa" value="<?php echo $kuota ?>">
      </div>
      <div class="form-group">
        <label for="">Langkah-langkah Pendaftran</label>
        <textarea name="cara" rows="3" rerquired="true" class="form-control" ><?php echo $cara ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Syarat Pendaftaran</label>
        <textarea name="syarat" rows="3" rerquired="true" class="form-control" ><?php echo $syarat ?></textarea>
      </div>
      <div class="form-group">
        <label>Kunci</label>
        <div class="radio">
          <label>
            <input type="radio" name="kunci" id="y" value="1" <?php echo $kunci == "1" ? "checked" : " " ?>>1
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="kunci" id="n" value="0" <?php echo $kunci == "0" ? "checked" : " " ?>>0
          </label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-1">
          <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
        </div>
        <div class="col-md-1">
          <button type="reset" name="reset" class="btn btn-danger">Reset</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
<?php
//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {

	$buka_daftar = $_POST['buka_daftar'];
	$tutup_daftar = $_POST['tutup_daftar'];
	$buka_pengumuman = $_POST['buka_pengumuman'];
	$tutup_pengumuman = $_POST['tutup_pengumuman'];
	$kuota = $_POST['kuota'];
	$cara = $_POST['cara'];
	$syarat = $_POST['syarat'];
	$kunci = $_POST['kunci'];

	$set = $db->cud("UPDATE setting SET buka_daftar =?, tutup_daftar=?,  buka_pengumuman=?, tutup_pengumuman=?, kuota=?, caradaftar=?, syaratdaftar=?, kunci=? WHERE id=?", [$buka_daftar, $tutup_daftar, $buka_pengumuman, $tutup_pengumuman, $kuota, $cara, $syarat, $kunci, 1]);
	$db->redirect('./?page=setting');
	$db->close();
}
ob_end_flush();
?>