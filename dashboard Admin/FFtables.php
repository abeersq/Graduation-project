<!DOCTYPE html>
<?php include("sidebar.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Idea` WHERE CONCAT(`Title`,`Abstract`,`TYPE`,`Skills_equipment`,`Faculty_Email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `Idea` JOIN `FIELD` ON  Idea.Title = FIELD.Title ";
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
                <a href="AddFacultyForm.php"><i class="fas fa-plus"></i></a>

              </div>
              <h6 class="m-0 font-weight-bold text-primary">Faculty Form</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Supervisor Email</th>
                    <th>Title</th>
                    <th>Abstract</th>
                    <th>Project Type</th>
                    <th>Skills and Equipment</th>
                    <th>CS Areas\fields</th>
                  </tr>

        <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tr>
                    <td><?php echo $row['Faculty_Email'];?> </td>
                      <td><?php echo $row['Title'];?> </td>
                      <td><?php echo $row['Abstract'];?> </td>
                      <td><?php echo $row['TYPE'];?> </td>
                      <td><?php echo $row['Skills_equipment'];?></td>
                      <td><?php echo $row['FIELD'];?> </td>



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
