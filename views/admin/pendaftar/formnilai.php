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
		$row   = $db->select("select * from nilai where nisn=?", [$nisn]);
		$btn   = "Edit";
		$mtk   = $row['mtk'];
		$ipa   = $row['ipa'];
		$bIndo = $row['b_indo'];
		$bIng  = $row['b_ing'];
		$total = $row['total'];

		//$db->Close();
	}
} else {
	$btn   = "Simpan";
	$mtk   = "";
	$ipa   = "";
	$bIndo = "";
	$bIng  = "";
	$total = "";
}
?>
<?php echo $mtk, $ipa, $bIndo, $bIng;?>
<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/Form Pendaftaran</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header">Form Nilai UN</h3>
  <div class="card-body">
    <form class="" action="#" method="post">
    <div class="form-row">
      <div class="col">
        <label for="">Matematika</label>
        <input type="number" name="mtk" required class="form-control" value="<?php echo $mtk;?>" >
      </div>
      <div class="col">
        <label for="">IPA</label>
        <input type="number" name="ipa" class="form-control" required value="<?php echo $ipa;?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="">Bahasa Inggris</label>
        <input type="number" name="b_ind" class="form-control" required value="<?php echo $bIndo;?>">
      </div>
      <div class="col">
        <label for="">Bahasa Indonesia</label>
        <input type="number" name="b_ing" class="form-control" required value="<?php echo $bIng;?>">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-1">
        <button type="submit" name="kirim" class="btn btn-primary"><?php echo "$btn"?></button>
      </div>
      <div class="col-md-2">
<?php if ($aksi == "edit"):?>
<a href="./?page=form-diri"><button type="button" name="kembali" class="btn btn-danger">Batal</button></a>
<?php endif?>
      <?php if ($aksi == ""):?>
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
	$mtk   = $_POST['mtk'];
	$ipa   = $_POST['ipa'];
	$b_ind = $_POST['b_ind'];
	$b_ing = $_POST['b_ing'];
	$total = $mtk+$ipa+$b_ing+$b_ind;

	if ($aksi == "edit") {
		$update = $db->cud("UPDATE nilai SET mtk =?, b_indo=?, b_ing =?, ipa=?, total=? WHERE nisn=?", [$mtk, $b_ind, $b_ing, $ipa, $total, $nisn]);
		$db->redirect('./?page=form-ortu&action=edit&nisn='.$nisn);
	} else {
		$kirim = $db->cud("INSERT into nilai values(?,?,?,?,?,?,?)", [null, $nisn, $mtk, $b_ind, $b_ing, $ipa, $total]);

		$db->redirect('./?page=form-ortu&nisn='.$nisn);
	}

	$db->close();
}
ob_end_flush();
?>