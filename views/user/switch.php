<?php
$page = isset($_GET['page'])?$_GET['page']:null;
switch ($page) {
	case 'form':
		include 'form.php';
		break;
	case 'formnilai':
		include 'form_nilai.php';
		break;
	case 'formortu':
		include 'form_ortu.php';
		break;
	case 'home':
		include '../../index.php';
		break;
	case 'tutupDaftar':
		include 'tutupdaftar.php';
		break;
	case 'tutupPengumuman':
		include 'tutuppengumuman.php';
		break;
	default:
		//include 'dashboard.php';
		break;
}
?>