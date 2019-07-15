<?php
$row = $db->select("SELECT * from setting where id=?", [1]);
$cara = $row['caradaftar'];
?>
<hr class="my-4">
<div class="row featurette">
  <div class="col-md-12">
    <h2 class="tentang-heading">Langkah-langkah mendaftar di <?php echo $nama ?></h2>
    <pre><?php echo $cara; ?></pre>
  </div>
</div>