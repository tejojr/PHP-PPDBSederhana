<?php
$id = 1;

if (!empty($id)) {
	$row       = $db->select("SELECT * FROM f_header WHERE id=?", [$id]);
	$nama      = $row['nama'];
	$deskripsi = $row['deskripsi'];
	$gbr       = $row['background'];
}

//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {
	$nama      = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$gbr       = $_FILES['gbr']['name'];
	$src       = $_FILES['gbr']['tmp_name'];
	move_uploaded_file($src, "../../asset/foto/".$gbr);
	$set = $db->cud("UPDATE f_header SET nama =?, deskripsi=?, background=? WHERE id=?", [$nama, $deskripsi, $gbr, 1]);
	$db->redirect('./?page=header');
	$db->close();
}
?>
<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/Header WEB</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header text-center">Header WEB</h3>
  <div class="card-body">
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Nama Sekolah</label>
        <input type="text" name="nama" required="true" class="form-control" value="<?php echo $nama?>">
      </div>
      <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" rows="3" rerquired="true" class="form-control" ><?php echo $deskripsi?></textarea>
      </div>
      <div class="form-group">
        <label for="">Foto</label>
        <div class="custom-file">
          <input type="file" id="gbr" name="gbr" class="custom-file-input">
          <label for="gbr" class="custom-file-label"><?php echo $gbr;?></label>
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
