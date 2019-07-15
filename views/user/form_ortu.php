<?php

if (isset($_GET['nisn'])) {
	$nisn = $_GET['nisn'];
} else {
	$nisn = "";
}
?>
<div class="card">
  <h3 class="card-header text-center">Fomulir Data Orang Tua</h3>
  <div class="card-body">
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
	$kirim   = $db->cud("INSERT into ortu values(?,?,?,?,?,?,?,?)", [null, $nisn, $ayah, $p_ayah, $ibu, $p_ibu, $no_telp, $alamat]);
}
?>