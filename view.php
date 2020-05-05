

<?php
include("dbConn.php");
$id = isset($_GET['ArchiveID'])? $_GET['ArchiveID']:"";
$stat=$conn->prepare("select * from  project_archive Where ArchiveID = ?");
Sstat->bindParan(1, Sid);
Sstat->execute();
$row - Sstat->fetch();
header ('Content-Type:'.$row['mime']);
 echo Srow['data'];
 ?>
