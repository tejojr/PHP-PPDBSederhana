<?php
ob_start();
session_start();
include_once "../../inc/Database.php";
$db = new Database();
if (!$db->inlogin()) {
	$db->redirect('../../login.php');
}
$uid = $_SESSION['uid'];
$siki = $db->select('SELECT * FROM admin where id=?', [$uid]);
$nama = $siki['nama'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard PPDB</title>
    <link rel="icon" href="../../asset/foto/logo.png" type="image/icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link href="../../asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PPDB Online</a>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i><?php echo $nama ?></a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="./?page=dashboard">
                    <i class="fa fa-tachometer float-right
                    "></i><span class="float-left">Dashboard </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?page=pendaftar">
                    <i class="fa fa-pencil-square-o float-right
                    "></i><span class="float-left">Pendaftaran</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?page=setting">
                    <i class="fa fa-cog float-right
                    "></i><span class="float-left">Setting PPDB</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="./?page=tentang">
                    <i class="fa fa-home float-right
                    "></i><span class="text-left">Tentang Sekolah</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="./?page=kontak">
                    <i class="fa fa-envelope float-right
                    "></i><span class="text-left">Kontak Sekolah</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?page=header">
                    <i class="fa fa-desktop float-right
                    "></i><span class="text-left">Header WEB</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="margin-top:40px">

<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch ($page) {
case 'home':
	include 'index.php';
	break;
case 'pendaftar':
	include 'pendaftar/data.php';
	break;
case 'kontak':
	include 'home/kontak.php';
	break;
case 'header':
	include 'home/header.php';
	break;
case 'tentang':
	include 'home/tentang.php';
	break;
case 'form-pendaftar':
	include 'pendaftar/form.php';
	break;
case 'form-ortu':
	include 'pendaftar/formortu.php';
	break;
case 'form-nilai':
	include 'pendaftar/formnilai.php';
	break;
case 'form-diri':
	include 'pendaftar/formdiri.php';
	break;
case 'form-view':
	include 'pendaftar/formview.php';
	break;
case 'dashboard':
	include 'dashboard.php';
	break;
case 'setting':
	include 'pengumuman/form.php';
	break;
default:
	include 'dashboard.php';
	break;
}
?>
</main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../asset/js/bootstrap.min.js"></script>
  </body>
</html>
<?php ob_end_flush()?>
