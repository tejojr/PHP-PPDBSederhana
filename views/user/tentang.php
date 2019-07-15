<?php

$row = $db->select("SELECT * from f_tentang where id=?", [1]);
$sejarah = $row['sejarah'];
$misi = $row['misi'];
$visi = $row['visi'];
$gbr = $row['gbr'];

?>
<hr class="my-4">
<div class="row featurette" id="about">
  <div class="col-md-7">
    <h2 class="tentang-heading">Profil</h2>
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a href="#collapse1" class="card-link" data-toggle="collapse" data-parent="#accordion">Sejarah</a>
        </div>
        <div id="collapse1" class="collapse">
          <div class="card-body">
            <?php echo $sejarah; ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="#collapse2" class="collapsed card-link" data-toggle="collapse" data-parent="#accordion">Visi</a>
        </div>
        <div id="collapse2" class="collapse">
          <div class="card-body">
            <pre><?php echo $visi;
?></pre>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a href="#collapse3" class="collapsed card-link" data-toggle="collapse" data-parent="#accordion">Misi</a>
        </div>
        <div id="collapse3" class="collapse">
          <div class="card-body">
            <pre><?php echo $misi;
?>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <img src="asset/foto/<?php
if ($gbr != null) {
	echo $gbr;
} else {
	echo 'logo.png';
}

?>" style="height: 390px; width: 366px" class="featurette-img img-fluid mx-auto">
  </div>
</div>