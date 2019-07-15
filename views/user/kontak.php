 <?php
$row     = $db->select("SELECT * from f_kontak where id=?", [1]);
$alamat  = $row['jalan'];
$no_telp = $row['no_hp'];
$web     = $row['website'];
$email   = $row['email'];
$fax     = $row['fax'];
$map     = $row['maps'];

?>
 <hr class="my-4">
 <div id="Contact">
  <h2 class="text-center">Hubungi Kami</h2>
  <br>
  <div class="row featurette" >
    <div class="col-md-6">
      <i class="fa fa-map-marker"></i> <?php echo $alamat;?><br>
      <i class="fa fa-phone"></i> <?php echo $no_telp;?> <br>
      <i class="fa fa-paper-plane"></i> <?php echo $email;?> <br>
      <i class="fa fa-globe"></i> <?php echo $web;?> <br>
      <i class="fa fa-fax"></i> <?php echo $fax;?>

    </div>
    <div class="col-md-6">
      <div class="iframe-container">
        <iframe src="<?php echo $map?>" width="500" height="400" frameborder="1" style="border:1" allowfullscreen></iframe>
      </div>

    </div>
  </div>