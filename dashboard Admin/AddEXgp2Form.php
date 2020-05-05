<!DOCTYPE html>
<?php
include("sidebar.php");

if (!empty($_POST))
if (isset($_POST['submit'])){


  $Project1GP=$_POST['Projectt1GP'];
  $Project2GP=$_POST['Project2GP'];
  $Project3GP=$_POST['Project3GP'];
  $Project4GP=$_POST['Project4GP'];
  $Project5GP=$_POST['Project5GP'];



updateGP2EXform($Project1GP,$Project2GP,$Project3GP,$Project4GP,$Project5GP);
}
 ?>
   <div class="row">
     <div class="col-3"></div>

     <div class="col-6">

   <div>
     <form method="post" action="AddEXgp2Form.php">

 <h4> GP2 projects:</h4><br>

 <div class="form-group">

     <label >Project1 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Projectt1GP" id="Project1 "  required><br>
 </div>

 <div class="form-group">

     <label >Project2 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project2GP" id="Project2"  required><br>
 </div>
 <div class="form-group">

     <label >Project3 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project3GP" id="Project3"  required><br>
 </div>
 <div class="form-group">

     <label >Project4 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project4GP" id="Project4"  required><br>
 </div>
 <div class="form-group">

     <label >Project5 : <span style="color:#9f0000;" >*</span></label><br><br>
       <input class="form-control" type="text" name="Project5GP" id="Project5"  required><br>
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
