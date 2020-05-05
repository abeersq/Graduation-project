<!DOCTYPE html>

<?php
include("sidebar.php");

if (!empty($_POST))
if (isset($_POST['submit'])){


$Group_no= $_POST['Group_no'];
$Title=$_POST['Title'];

ConfirmGroups($Group_no,$Title);
}
 ?>



   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="post" action="ConfirmGroups.php">


 <div class="form-group">

     <label >Group number: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="number" name="Group_no" id="Group_no"  required placeholder="Enter Group_no that you want to Confirm"><br>
 </div>

 <div class="form-group">

     <label >Title: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Title" id="Title"  required placeholder="Enter Title that you want to Confirm"><br>
 </div>

      <input type="submit" class="btn btn-primary" name="submit" value="Confirm" >


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
