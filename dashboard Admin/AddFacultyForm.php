<!DOCTYPE html>
<?php
include("sidebar.php");

if (!empty($_POST))
if (isset($_POST['submit'])){


$desc= $_POST['Description'];


updatefacultyform($desc);
}
 ?>
   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="post" action="AddFacultyForm.php">

       <div class="form-group">

      <label >Description: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Description" id="Description" required><br>
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
