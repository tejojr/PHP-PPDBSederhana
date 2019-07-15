<?php
if (isset($_GET['action'])) {
	$aksi = $_GET['action'];
} else {
	$aksi = "";
}
include_once '../../inc/Database.php';
$db     = new Database();
$result = $db->select("SELECT * from f_header where id=?", [1]);
$jeneng = $result['nama'];

//cek tanggal
$row              = $db->select("SELECT * from setting where id=?", [1]);
$buka_daftar      = $row['buka_daftar'];
$tutup_daftar     = $row['tutup_daftar'];
$buka_pengumuman  = $row['buka_pengumuman'];
$tutup_pengumuman = $row['tutup_pengumuman'];
$kuota            = $row['kuota'];
$dt               = new DateTime();
$todays_date      = $dt->format('Y-m-d H:i:s');
//get data

?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDB Online</title>
	<link rel="icon" href="asset/foto/logo.png" type="image/icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
	<link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../asset/css/style.css">
	<link rel="stylesheet" href="../../asset/css/animate.css">
	<link href="../../asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	.footer{
		padding: 2.5rem 0;
		color: white;
		border-top: .05rem solid #e5e5e5;
		text-align: center;
	}
	.footer p:last-child{
		margin-bottom: 0;

	}

</style>
</head>
<body>
	<header id="home">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a class="navbar-brand" href="#"><?php echo $jeneng;?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../../">Home</a>
					</li>
					<li class="nav-item">
						<a href="ppdb.php?action=daftar" class="nav-link">Pendaftar</a>
					</li>
					<li class="nav-item">
						<a href="ppdb.php?action=lihat" class="nav-link">Pengumuman</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<main class="container">
<?php

if ($aksi) {
	if ($aksi == "daftar") {
		if ($todays_date >= $buka_daftar && $todays_date <= $tutup_daftar) {
			include 'form.php';
		} else {
			include 'tutupdaftar.php';
		}
	} else if ($aksi == "lihat") {
		if ($todays_date >= $buka_pengumuman && $todays_date <= $tutup_pengumuman) {
			include 'datalulus.php';
		} else {
			include 'tutuppengumuman.php';

		}
	}
}

?>
</main>
<br>
<br>
	<footer class="footer bg-dark">
		<p>&copy; 2018 zeref.weismann.inc All right reserverd</p>
		<p>SMK N 1 Purbalingga</p>
		<p><a href="#">Back to Home</a></p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../../asset/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.a').hover(function(){
				$(this).addClass('animated bounce');
			});
		});

	</script>
</body>
</html>
