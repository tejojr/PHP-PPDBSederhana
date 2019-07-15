<section id="breadcrumb">
  <ol class="breadcrumb">
    <li class="active">Dashboard/Data Calon Siswa</li>
  </ol>
</section>
<div class="card">
  <h3 class="card-header">Data Calon Siswa</h3>
  <div class="card-body">
    <a href="./?page=form-pendaftar" class="btn btn-danger"><i class="fa fa-user-plus"></i></a><br/>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NISN</th>
          <th scope="col">Nama</th>
          <th scope="col">Nomor HP</th>
          <th scope="col">Sekolah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
<?php
$row = $db->selectall("SELECT * FROM pendaftar ORDER BY ? ASC", ['nisn']);
foreach ($row as $a) {
	?>
													 <tr>
													<td><?php echo $a['nisn'];?></td>
													<td><?php echo $a['nama'];?></td>
													<td><?php echo $a['hp'];?></td>
													<td><?php echo $a['asal_sek'];?></td>
													<td>
										      <a href="./?page=form-view&nisn=<?php echo $a['nisn']?>"><i class="fa fa-eye" alt="Lihat Detail" title="Lihat Detail"></i></a>
													<a href="./?page=form-pendaftar&action=edit&nisn=<?php echo $a['nisn']?>"><i class="fa fa-edit" alt="edit" title="edit"></i></a>
													 <a href="./?page=form-pendaftar&action=delete&nisn=<?php echo $a['nisn']?>"><i class="fa fa-trash" alt="delete" title="delete"></i></a>
					                 <a href="../laporan/printpdf.php?pdf=<?php echo $a['nisn']?>" target="_blank"><i class="fa fa-print alt="print" title="Print"></i></a>
													 </td>
													 </tr>
	<?php }?>
</table>
</div>
  </div>
</div>
