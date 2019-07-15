<?php
if (isset($_GET['nisn'])) {
	$nisn = $_GET['nisn'];
} else {
	$nisn = "";
}
?>
<div class="card">
  <h3 class="card-header">Form Nilai UN</h3>
  <div class="card-body">
    <form class="" action="#" method="post">
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
      <div class="form-group row">
        <div class="col-md-1">
          <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
        </div>
        <div class="col-md-2">
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
	$mtk   = $_POST['mtk'];
	$ipa   = $_POST['ipa'];
	$b_ind = $_POST['b_ind'];
	$b_ing = $_POST['b_ing'];
	$total = $mtk+$ipa+$b_ing+$b_ind;
	$kirim = $db->cud("INSERT into nilai values(?,?,?,?,?,?,?)", [null, $nisn, $mtk, $b_ind, $b_ing, $ipa, $total]);

	$db->redirect('./?page=form-ortu&nisn='.$nisn);
}

$db->close();
?>