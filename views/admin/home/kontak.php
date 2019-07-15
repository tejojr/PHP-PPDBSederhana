<?php
$id = 1;

if (!empty($id)) {
	$row   = $db->select("SELECT * FROM f_kontak WHERE id=?", [$id]);
	$maps  = $row['maps'];
	$jalan = $row['jalan'];
	$hp    = $row['no_hp'];
	$web   = $row['website'];
	$fax   = $row['fax'];
	$mail  = $row['email'];

}

//==============================Insert update Data==================================================================
if (isset($_POST['kirim'])) {

	$maps  = $_POST['maps'];
	$jalan = $_POST['jalan'];
	$hp    = $_POST['no_hp'];
	$web   = $_POST['website'];
	$fax   = $_POST['fax'];
	$mail  = $_POST['email'];
	$set   = $db->cud("UPDATE f_kontak SET maps =?, jalan=?,  no_hp=?, website=?, fax=?, email=? WHERE id=?", [$maps, $jalan, $hp, $web, $fax, $mail, 1]);
	$db->redirect('./?page=kontak');
	$db->close();
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
      <div class="form-group">
        <label for="">Maps</label>
        <textarea name="maps" rows="3" rerquired="true" class="form-control" ><?php echo $maps?></textarea>
      </div>
      <div class="form-group">
        <label for=""> Alamat Jalan</label>
        <textarea name="jalan" rows="3" rerquired="true" class="form-control" ><?php echo $jalan?></textarea>
      </div>
      <div class="form-group row">
        <div class="col">
          <label>No HP</label>
          <input type="text" class="form-control" name="no_hp" value="<?php echo $hp?>">
        </div>
        <div class="col">
          <label>Alamat Website</label>
          <input type="text" class="form-control"  name="website" value="<?php echo $web?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label>Faximile</label>
          <input type="text" class="form-control"  name="fax" value="<?php echo $fax?>">
        </div>
        <div class="col">
          <label>Email</label>
          <input type="email" class="form-control"  name="email" value="<?php echo $mail?>">
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
