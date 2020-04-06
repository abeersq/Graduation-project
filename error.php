<?php


function alert($isError,$msg){
    if($isError){
      echo '<div class="alert alert-danger mt-5 " role="alert">'.$msg.'</div>';
    }
    else{
        echo '<div class="alert alert-success mt-5 " role="alert">'.$msg.'</div>';
    }
}

 ?>
