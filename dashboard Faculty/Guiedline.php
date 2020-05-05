<!DOCTYPE html>
<?php include("sidebar.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Guidelin` WHERE CONCAT(`VERSION`, `TYPE`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `Guidelin`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "GP");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Guiedlines</h6>
            </div>
            <div class="card-body">

                    <!-- Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="studentstables.php" method="post">
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
                    <th colspan="1"></th>

                      <th>Guiedlines</th>





                  </tr>

        <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tr>

                      <td><?php echo $row['VERSION'];?></td>
                      <td><?php echo $row['TYPE'];?></td>




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
