 <?php

$row = $db->select("SELECT * from f_header where id=?", [1]);
$nama = $row['nama'];
$deskripsi = $row['deskripsi'];
$gbr = $row['background'];
?>
 <header id="home">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><?php echo $nama; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a href="#Contact" class="nav-link">Kontak</a>
            </li>
            <li class="nav-item">
              <a href="views/user/ppdb.php?action=daftar" class="nav-link">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a href="views/user/ppdb.php?action=lihat" class="nav-link">Pengumuman</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="jumbotron" style="margin-top: 50px; background-image: url(asset/foto/<?php echo $gbr; ?>)">
        <center>
          <h1 class="animated slideInDown"><?php echo $nama; ?></h1>
          <hr class="my-4">
          <h3 class="animated slideInDown"><?php echo $deskripsi; ?></h3>
          <p class="lead">
            <a href="#Kelebihan" class=" animated bounceIn btn btn-primary btn-lg" role="button">Daftar</a>
          </p>
        </center>
      </div>
    </header>