<?php
include("../dbConn.php");
session_start();




function AddGPfiles($Title,$Abstract,$Grade,$GPfile,$P_Keyword){

    global $conn;

  $sql1 = "INSERT INTO Project_Archive (Title,Abstract,Grade,GPfile) VALUES ('".$Title."', '".$Abstract."','".$Grade."','".$GPfile."')";
  $sql2 = "INSERT INTO Keyword (P_Keyword) VALUES ('".$P_Keyword."')";


if ($conn->multi_query($sql1) === TRUE) {
     $_SESSION['AddGPfiles'] = true;
     alert(false,"Added Successfuly ..");
 } else {
  alert(true,"Erorr ..");
}

if ($conn->multi_query($sql2) === TRUE) {
     $_SESSION['AddGPfiles'] = true;

 } else {
  alert(true,"Erorr ..");
}

$conn->close();
}


function EditGPfiles($ProjectID,$Title,$Abstract,$Grade,$GPfile,$P_Keyword){


  global $conn;
  $sql = " UPDATE Project_Archive SET
   Title='".$Title."',
   Abstract='".$Abstract."',
   Grade='".$Grade."',
   GPfile='".$GPfile."'
   WHERE ArchiveID='".$ProjectID."'";

   $sql2 = " UPDATE Keyword SET
    P_Keyword='".$P_Keyword."'
    WHERE ArchiveID='".$ProjectID."'";

  $conn->query($sql);
  $conn->query($sql2);

  if ($conn->affected_rows > 0) {
  alert(false,"Update Successfuly ..");
  }
  else if ($conn->affected_rows <= 0) {
  alert(true," Cant update !! ");
  $msg = "Erroe ..!! " . $conn->error;
  alert(true,$msg);

  }
  else {
  $msg = "Erroe ..!! " . $conn->error;
  alert(true,$msg);
  }

  $conn->close();
}


function checkSimilarity($Title,$Abstract,$P_Keyword){

    $valueDB =  "SELECT * FROM Project_Archive INNER JOIN Keyword ON Project_Archive.ArchiveID = Keyword.ArchiveID WHERE CONCAT(`Title`,`Abstract`,`P_Keyword`)";

    $value1=similar_text($valueDB,$Title,$percent1);
    $value2=similar_text($valueDB,$Abstract,$percent2);
    $value3=similar_text($valueDB,$P_Keyword,$percent3);

    echo "There is a similarity with titles in ".$percent1."% <br>";
    echo "There is a similarity with abstracts in ".$percent2."% <br>";
    echo "There is a similarity with keywords in ".$percent3."% <br>";


}

function updateFacultyInfo($NAME,$Email,$PASSWORD,$id){
    global $conn;
    $sql = " UPDATE GP_committee SET
     Name='".$NAME."',
     Email='".$Email."',
     Password='".$PASSWORD."'
     WHERE id='".$id."'";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    alert(false,"Update Successfuly ..");
}
else if ($conn->affected_rows <= 0) {
    alert(true," Cant update !! ");
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}
else {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}

$conn->close();
}




function deleteGPFile($Title){
    global $conn;
$sql = "DELETE FROM Project_Archive WHERE Title='".$Title."'";
$result=$conn->query($sql);
if($conn->affected_rows > 0){
//if ($conn->query($sql) === TRUE) {
alert(false,"Project Deleted");
} else {
alert(true,"Error Project does not exist");
}

$conn->close();
}


function alert($isError,$msg){
    if($isError){
      echo '<div class="alert alert-danger mt-5 " role="alert">'.$msg.'</div>';
    }
    else{
        echo '<div class="alert alert-success mt-5 " role="alert">'.$msg.'</div>';
    }
}


?>
