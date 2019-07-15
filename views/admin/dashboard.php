<section id="breadcrumb">
    <ol class="breadcrumb">
      <li class="active">Dashboard/MyDashboard</li>
    </ol>
</section>
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary">
      <div class="card-body">
        <span class="float-left">
<?php
$jumlah = $db->selectall("SELECT * FROM pendaftar");
$a      = count($jumlah);
echo $a;
?></span>
        <span class="float-right">
          <i class="fa fa-list fa-3x"></i>
        </span>
      </div>
      <a class="card-footer text-white " href="./?page=pendaftar">
        <span class="float-left">Pendaftaran</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning">
      <div class="card-body">
        <span class="float-left">0</span>
        <span class="float-right">
          <i class="fa fa-check-square fa-3x"></i>
        </span>
      </div>
      <a class="card-footer text-white" href="#">
        <span class="float-left">Komentar</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
