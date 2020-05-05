<!DOCTYPE html>
<?php include("sidebar.php");


//include("../Forms/functions.php");
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  $email="facultyy";//$_SESSION["Email"];

 //$email='asas@as';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `Group_` WHERE CONCAT(`Group_no`, `semester`, `AVG_GPA`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
   $query = "SELECT * FROM `Work_on` JOIN `Project` ON  Work_on.PID = Project.PID JOIN `Group_` ON  Work_on.Group_no = Group_.Group_no WHERE work_on.faculty_email LIKE '%".$email."%' ";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
  global $conn;
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div style="text-align:right">
                <a href="#AddGroup"><i class="fas fa-plus"></i></a>
                <a href="#AddGpfile"><i class="fas fa-trash-alt"></i></a>
              </div>
              <h6 class="m-0 font-weight-bold text-primary">Students Group</h6>
            </div>
            <div class="card-body">

                    <!-- Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="Groupstables.php" method="post">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" name="valueToSearch" placeholder="..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <input class="btn btn-primary" name="search" type="submit" value="Search">
                        </form>
                        </div>
                      </div>
                          <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Group Number</th>
                    <th>Semester</th>
                    <th>Average GPA</th>
                  </tr>

        <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tr>

                    <td><?php echo $row['Group_no'];?></td>
                      <td><?php echo $row['semester'];?></td>
                      <td><?php echo $row['AVG_GPA'];?></td>


                  </tr>
                  <?php endwhile;?>
                </table>

              </div>
            </div>
          </div>

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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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
