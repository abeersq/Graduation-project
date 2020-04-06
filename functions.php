<?php
include("dbConn.php");

function SignUp($NAME,$email,$PASSWORD){


    global $conn;
  //  echo $NAME.$email.$PASSWORDs;
    $sql = "INSERT INTO Users (NAME,email,password) VALUES ('".$NAME."', '".$email."', '".$PASSWORD."')";

if ($conn->query($sql) === TRUE) {
     $_SESSION['loggedin'] = true;
    echo "Registration Successful";
} else {
    $msg= "Registration Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}

function login($email , $PASSWORD){
   $sql ="select NAME from Users where email='".$email."' and password='".$PASSWORD."'";
    global $conn;

    $result = $conn->query($sql);
    //$ok = $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
   $_SESSION['loggedin'] = true;
   header("Location: signup.php");
exit;
    }
    else{
        echo $count.' password is wrong\n';
    }

    $conn->close();
}

function contact($NAME,$email,$textc){


    global $conn;
    $sql = "INSERT INTO ContactForm (name,email,textc) VALUES ('".$NAME."', '".$email."', '".$textc."')";

if ($conn->query($sql) === TRUE) {
    echo "thank you..";
} else {
    $msg= "Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}

function facultyform( $NAME, $phoneNumber, $OfficeNumber, $OfficeHour, $ProjectType, $CSAreas_fields,	$ProjectTitle, $Abstract,	$SkillsEquipment,	$email){


    global $conn;
    $sql = "INSERT INTO facultyform (NAME,phoneNumber,OfficeNumber,OfficeHour,ProjectType,CSAreas_fields,ProjectTitle,Abstract,SkillsEquipment,email)
    VALUES ('".$NAME."', '".$phoneNumber."', '".$OfficeNumber."', '".$OfficeHour."', '".$ProjectType."', '".$CSAreas_fields."',	'".$ProjectTitle."', '".$Abstract."',	'".$SkillsEquipment."','".$email."')";

if ($conn->query($sql) === TRUE) {
echo "Thank you..!";
} else {
    $msg= "Error" . $conn->error;
echo $msg;
}

$conn->close();
}

function studentform($GPA,$ID,$Student_email){


    global $conn;
    $sql = "INSERT INTO Student (GPA,ID,Student_email,Group_no) VALUES ('".$GPA."', '".$ID."', '".$Student_email."')";


if ($conn->query($sql) === TRUE) {
    echo "thank you..";
} else {
    $msg= "Error..!!!" . $conn->error;
    echo $msg;
}

$conn->close();
}

?>
