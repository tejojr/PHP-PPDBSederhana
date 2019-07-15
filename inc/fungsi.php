<?php
function CRUD($conn,$sql){
  $result = $conn->query($sql);
  $row =$result->fetch_aray();
  $conn->close();
  return $row[0];
}
 ?>
