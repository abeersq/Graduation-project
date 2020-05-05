<?php
include("../dbConn.php");

function Calendar($TaskName,$deadline,$Deliverable){


    global $conn;
  $sql = "INSERT INTO SCHEDULE (TaskName,deadline,Deliverable) VALUES ('".$TaskName."', '".$deadline."', '".$Deliverable."')";

if ($conn->query($sql) === TRUE) {
     $_SESSION['Calendar'] = true;
    echo "thank you";
} else {
    $msg= "Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}


function Guideline($version,$Type){

    global $conn;
  $sql = "INSERT INTO  Guidelin (version,Type) VALUES ('".$version."', '".$Type."')";

if ($conn->query($sql) === TRUE) {
     $_SESSION[' Guidelin'] = true;
    echo "thank you";
} else {
    $msg= "Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}

function ConfirmGroups($Title,$Group_no){

    global $conn;
$sql1= "INSERT INTO Assign (Title,Group_no) VALUES ('".$Group_no."','".$Title."')";

  $sql2=  "INSERT INTO Work_on (Faculty_email,PID,Group_no)
  SELECT Faculty_email ,PID,Group_no
    FROM Idea  JOIN Project ON Idea.Title = Project.Title JOIN Assign  ON Idea.Title = Assign.Title
    WHERE Idea.Title LIKE '%".$Title."%'";

    if ($conn->query($sql1) === TRUE) {
         $_SESSION['ConfirmGroups'] = true;
        echo "thank you";
    } else {
        $msg= "Error..!!!" . $conn->error;
        echo $msg;
    }


if ($conn->query($sql2) === TRUE) {
     $_SESSION['loggedin'] = true;
    echo "thank you";
} else {
    $msg= "Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}

function AddGPfiles($Title,$Abstract,$Grade,$GPfile,$P_Keyword){
    global $conn;
  $sql1 = "INSERT INTO Project_Archive (Title,Abstract,Grade,GPfile) VALUES ('".$Title."', '".$Abstract."','".$Grade."','".$GPfile."')";
  $sql2 = "INSERT INTO Keyword (P_Keyword) VALUES ('".$P_Keyword."')";


if ($conn->multi_query($sql1) === TRUE) {
     $_SESSION['AddGPfiles'] = true;
     alert(false,"Added Successfuly ..");
 } else {
  alert(true,"Erorr ..");
  $msg= "Error..!!!" . $conn->error;
  echo $msg;
}

if ($conn->multi_query($sql2) === TRUE) {
     $_SESSION['AddGPfiles'] = true;

 } else {
  alert(true,"Erorr ..");
  $msg= "Error..!!!" . $conn->error;
  echo $msg;
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


function checkSimilarity($Title,$Abstract,$P_Keyword){

    $valueDB =  "SELECT * FROM Project_Archive INNER JOIN Keyword ON Project_Archive.ArchiveID = Keyword.ArchiveID WHERE CONCAT(`Title`,`Abstract`,`P_Keyword`)";

    $value1=similar_text($valueDB,$Title,$percent1);
    $value2=similar_text($valueDB,$Abstract,$percent2);
    $value3=similar_text($valueDB,$P_Keyword,$percent3);

    echo "There is a similarity with titles in ".$percent1."% <br>";
    echo "There is a similarity with abstracts in ".$percent2."% <br>";
    echo "There is a similarity with keywords in ".$percent3."% <br>";


}


function deletefaculty($email){
    global $conn;
$sql = "DELETE FROM Faculty WHERE Email='".$email."'";
$result=$conn->query($sql);
if($conn->affected_rows > 0){
//if ($conn->query($sql) === TRUE) {
alert(false,"User Deleted");
} else {
alert(true,"Error Email does not exist");
}

$conn->close();
}





function deleteStudent($email){
    global $conn;
$sql = "DELETE FROM student WHERE Email='".$email."'";
$result=$conn->query($sql);
if($conn->affected_rows > 0){
//if ($conn->query($sql) === TRUE) {
     alert(false,"User Deleted");

} else {
    alert(true,"Error Email does not exist");
}

$conn->close();
}




function deleteGPCommittee($email){
    global $conn;
$sql = "DELETE FROM GP_committee WHERE Email='".$email."'";
$result=$conn->query($sql);
if($conn->affected_rows > 0){
//if ($conn->query($sql) === TRUE) {
alert(false,"User Deleted");

} else {
alert(true,"Error Email does not exist");
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

function DeleteGroupinitiall($Group_no){
    global $conn;
$sql = "DELETE FROM  StudentInitialGroup WHERE Group_no='".$Group_no."'";
$sql2 = "DELETE FROM Group_ WHERE Group_no='".$Group_no."'";
$sql3 = "DELETE FROM  studentprojects WHERE Group_no='".$Group_no."'";
$result=$conn->query($sql);
$result2=$conn->query($sql2);
$result3=$conn->query($sql3);

if($conn->affected_rows > 0){
//if ($conn->query($sql) === TRUE) {
alert(false,"Group Deleted");
} else {
alert(true,"Error Group does not exist");
}

$conn->close();
}




function updateGPCInfo($NAME,$Email,$PASSWORD,$id){
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


function updatefacultyform($desc){
    global $conn;
    $sql = " UPDATE formsadd SET description ='".$desc."' WHERE id= 4";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    alert(false,"Add Successfuly ..");
    $_SESSION['FF'] === true;
}
else if ($conn->affected_rows <= 0) {
    alert(true," Cant Add!! ");
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}
else {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}

$conn->close();
}


function updateStudentform($Project1,$Project2,$Project3,$Project4,$Project5,$desc){
    global $conn;
    $sql = " UPDATE formsadd SET
    Project1='".$Project1."',
    Project2='".$Project2."',
    Project3='".$Project3."',
    Project4='".$Project4."',
    Project5='".$Project5."',
    description ='".$desc."'
    WHERE id= 1";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    alert(false,"Add Successfuly ..");
    $_SESSION['SF'] = true;
}
else if ($conn->affected_rows <= 0) {
    alert(true," Cant Add!! ");
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}
else {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}

$conn->close();
}


function updateGP1EXform($Project1,$Project2,$Project3,$Project4,$Project5,$desc){
    global $conn;
    $sql = " UPDATE formsadd SET
    Project1='".$Project1."',
    Project2='".$Project2."',
    Project3='".$Project3."',
    Project4='".$Project4."',
    Project5='".$Project5."',
    description ='".$desc."'
    WHERE id= 2";
$conn->query($sql);
if ($conn->affected_rows > 0) {
    $_SESSION['EXF'] = true;
}
else if ($conn->affected_rows <= 0) {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}
else {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}

$conn->close();
}


function updateGP2EXform($Project1GP,$Project2GP,$Project3GP,$Project4GP,$Project5GP){
    global $conn;
    $sql = " UPDATE formsadd SET
    Project1='".$Project1GP."',
    Project2='".$Project2GP."',
    Project3='".$Project3GP."',
    Project4='".$Project4GP."',
    Project5='".$Project5GP."'
    WHERE id= 3";
    $conn->query($sql);
if ($conn->affected_rows > 0) {
    alert(false,"Add Successfuly ..");
}
else if ($conn->affected_rows <= 0) {
    alert(true," Cant Add!! ");
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
}
else {
    $msg = "Erroe ..!! " . $conn->error;
    alert(true,$msg);
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
