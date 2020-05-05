<!DOCTYPE html>

<?php
include("sidebar.php");

if (!empty($_GET))
if (isset($_GET['submit'])){

$ProjectID= $_GET['ProjectID'];
$Title= $_GET['title'];
$Abstract= $_GET['Abstract'];
$Grade= $_GET['Grade'];
$GPfile= $_GET['GPfile'];
$P_Keyword = $_GET['Keywords'];

EditGPfiles($ProjectID,$Title,$Abstract,$Grade,$GPfile,$P_Keyword);

}
 ?>



   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="get" action="EditGPfiles.php">
       <div class="form-group">

      <label >Project ID: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="ProjectID" id="ProjectID" required placeholder="Enter project id that you want to edit"><br>
      </div>
       <div class="form-group">

      <label >Title: <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="title" id="title" required><br>
 </div>

 <div class="form-group">

     <label >Abstract : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Abstract" id="Abstract" required><br>
 </div>

 <div class="form-group">

<label >Keywords:<span style="color:#9f0000;" >*</span></label><br><br>
 <input class="form-control" type="text" name="Keywords" id="Keywords"  required><br>
</div>

 <div class="form-group">

       <label>Grade : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Grade" id="Grade" required><br>
 </div>

 <div class="form-group">
<label for="GPfile">Select file :<span style="color:#9f0000;" >*</span></label><br><br>
 <input type="file" lass="btn btn-primary" id="GPfile" name="GPfile" required>
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
