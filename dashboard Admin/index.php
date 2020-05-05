<!DOCTYPE html>
<?php include("sidebar.php");
//include("../Forms/functions.php");
//echo $_SESSION["id"];
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

global $conn;
$id=3;
    $sql = "SELECT * FROM `GP_committee`  WHERE id ='".$id."' ";
    $result = $conn->query($sql);
   if($result){
    $row = $result->fetch_assoc();


    //  echo $array[2];



?>

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div style="text-align:right">
                <a href="EditGPCinfo.php"><i class="fas fa-edit"></i></a>
              </div>
              <h6 class="m-0 font-weight-bold text-primary">My iformation </h6>
            </div>
            <div class="card-body">
              <h4 style="color:#3A61D0; font-weight:bolder;">Name:</h4>
              <h5><?php echo $row['Name']; ?></h5><br>
              <h4 style="color:#3A61D0; font-weight:bolder;">Email:</h4>
              <?php echo $row['Email']; ?>



            </div>
          </div>
<?php }//} ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> &copy;GraduationProjectsGP.com (&reg;2020)</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
