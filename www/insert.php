<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $Nama=$_POST['Nama'];
 $Nim=$_POST['Nim'];
 $Fakultas=$_POST['Fakultas'];
 $Progdi=$_POST['Progdi'];

 $q=mysqli_query($con,"INSERT INTO `cuti` (`Nama`,`Nim`,`Fakultas`,`Progdi`) VALUES ('$Nama','$Nim','$Fakultas','$Fakultas')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>