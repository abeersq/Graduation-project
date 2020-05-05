<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GP";


try
{
 $conn = new mysqli($servername, $username, $password,$dbname);
 $conn->set_charset("utf8");


if ($conn->connect_error) {
    die('<div class="alert alert-danger mt-5 " role="alert">Connection failed: ' . $conn->connect_error. '</div>');
}

}
catch(Exception $e)
{
    echo '<div class="alert alert-danger mt-5" role="alert">'.$e->getMessage().'</div>';
}


?>
