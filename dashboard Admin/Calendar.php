<!DOCTYPE html>

<?php
include("sidebar.php");

if (!empty($_POST))
if (isset($_POST['submit'])){


$TaskName= $_POST['title'];
$deadline= $_POST['Deadline'];
$Deliverable= $_POST['deliverable'];


Calendar($TaskName,$deadline,$Deliverable);
}
 ?>



   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="post" action="Calendar.php">

       <div class="form-group">

      <label >Title: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="title" id="title" required placeholder="Task title "><br>
 </div>
 <div class="form-group">

     <label >Deadline : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Deadline" id="Deadline"  required placeholder="YYYY-MM-DD HH:MM:SS"><br>
 </div>
 <div class="form-group">

       <label>Deliverable : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="deliverable" name="deliverable" id="deliverable" required placeholder="YYYY-MM-DD"><br>
 </div>

      <input type="submit" class="btn btn-primary" name="submit" value="Save" >


       </form>
   </div>

 </div>
 <div class="col-md-3"></div>

 </div>

      <!-- End of Main Content -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
