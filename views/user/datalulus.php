<div class="card">
  <h3 class="card-header">Siswa Yang Diterima</h3>
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Total Nilai</th>
          </tr>
        </thead>
<?php
$hasil = $db->select("SELECT * FROM setting where id =?", [1]);
$kuota = $hasil['kuota'];
$res   = $db->selectall("SELECT * FROM calon_siswa ORDER BY total DESC LIMIT $kuota");
foreach ($res as $a) {
	?>
	         <tr>
	          <td><?php echo $a['nisn'];?></td>
	          <td><?php echo $a['nama'];?></td>
	          <td><?php echo $a['asal_sek'];?></td>
	          <td><?php echo $a['total'];?></td>

	        </tr>
	<?php }?>
</table>
<?php
?>
</div>
  </div>
</div>
