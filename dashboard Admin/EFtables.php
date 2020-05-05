<!DOCTYPE html>
<?php include("sidebar.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `EXAMINATIONS` WHERE CONCAT(`NAME`,`Email`,`COMMENT`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `EXAMINATIONS` JOIN `EXAMINATEGP1PROJECT` ON EXAMINATIONS.ID = EXAMINATEGP1PROJECT.ID JOIN `EXAMINATEGP2PROJECT` ON  EXAMINATIONS.ID = EXAMINATEGP2PROJECT.ID ";
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
                <a href="AddEXForm.php"><i class="fas fa-plus"></i></a>

              </div>
              <h6 class="m-0 font-weight-bold text-primary">Examinate Form</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>GP1 projects</th>
                    <th>GP2 projects</th>
                  </tr>

        <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tr>
                      <td><?php echo $row['NAME'];?> </td>
                      <td><?php echo $row['Email'];?> </td>
                      <td><?php echo $row['COMMENT'];?> </td>
                      <td><?php echo $row['Project1GP1'];?> <br> <?php echo $row['Project2GP1'];?> <br><?php echo $row['Project3GP1'];?> <br><?php echo $row['Project4GP1'];?><br><?php echo $row['Project5GP1'];?></td>
                      <td><?php echo $row['Project1GP2'];?> <br> <?php echo $row['Project2GP2'];?> <br><?php echo $row['Project3GP2'];?> <br><?php echo $row['Project4GP2'];?><br><?php echo $row['Project5GP2'];?></td>



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
