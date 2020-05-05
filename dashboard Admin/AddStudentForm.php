<!DOCTYPE html>
<?php
include("sidebar.php");

if (!empty($_POST))
if (isset($_POST['submit'])){

$Project1=$_POST['Projectt1'];
$Project2=$_POST['Project2'];
$Project3=$_POST['Project3'];
$Project4=$_POST['Project4'];
$Project5=$_POST['Project5'];
$desc= $_POST['Description'];


updateStudentform($Project1,$Project2,$Project3,$Project4,$Project5,$desc);
}
 ?>
   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="post" action="AddStudentForm.php">

       <div class="form-group">

      <label >Description: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Description" id="Description" required><br>
 </div>
 <div class="form-group">

     <label >Project1 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Projectt1" id="Project1"  required><br>
 </div>

 <div class="form-group">

     <label >Project2 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project2" id="Project2"  required><br>
 </div>
 <div class="form-group">

     <label >Project3 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project3" id="Project3"  required><br>
 </div>
 <div class="form-group">

     <label >Project4 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project4" id="Project4"  required><br>
 </div>
 <div class="form-group">

     <label >Project5 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project5" id="Project5"  required><br>
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
