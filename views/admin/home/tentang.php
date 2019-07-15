<?php
$id = 1;

if (!empty($id)) {
	$row = $db->select("SELECT * FROM f_tentang WHERE id=?", [$id]);
	$sejarah = $row['sejarah'];
	$misi = $row['misi'];
	$visi = $row['visi'];
	$gbr = $row['gbr'];
}

//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {
	$sejarah = $_POST['sejarah'];
	$misi = $_POST['misi'];
	$visi = $_POST['visi'];
	$gbr = $_FILES['gbr']['name'];
	$src = $_FILES['gbr']['tmp_name'];
	move_uploaded_file($src, "../../asset/foto/" . $gbr);
	$set = $db->cud("UPDATE f_tentang SET sejarah =?, gbr=?, misi=?,  visi=? WHERE id=?", [$sejarah, $gbr, $visi, $misi, 1]);
	$db->redirect('./?page=tentang');
	$db->close();
}
?>
<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/Tentang sekolah</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header text-center">Setting PPDB</h3>
  <div class="card-body">
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Sejarah</label>
        <textarea name="sejarah" rows="3" rerquired="true" class="form-control" ><?php echo $sejarah ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Visi</label>
        <textarea name="visi" rows="3" rerquired="true" class="form-control" ><?php echo $visi ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Misi</label>
        <textarea name="misi" rows="3" rerquired="true" class="form-control" ><?php echo $misi ?></textarea>
      </div>
      <div class="form-group">
        <label for="">Foto</label>
        <div class="custom-file">
          <input type="file" id="gbr" name="gbr" class="custom-file-input">
          <label for="gbr" class="custom-file-label"><?php echo $gbr; ?></label>
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
  </div>
</form>
</div>
</div>
