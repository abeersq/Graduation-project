<!DOCTYPE html>
<?php include("sidebar.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `StudentInitialGroup`
    WHERE CONCAT(`Group_no`)
    LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `StudentInitialGroup` JOIN `Group_` ON StudentInitialGroup.Group_no = Group_.Group_no JOIN `studentprojects` ON StudentInitialGroup.Group_no=studentprojects.Group_no ";
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
                <a href="AddStudentForm.php"><i class="fas fa-plus"></i></a>
                <a href="DeleteGroupinitial.php"><i class="fas fa-trash-alt"></i></a>
                <a href="ConfirmGroups.php" alt="confirm" ><i class="fas fa-check-square"></i></a>

              </div>
              <h6 class="m-0 font-weight-bold text-primary">Students Form</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Group Number</th>
                    <th>Group Names</th>
                    <th>Group GPA's</th>
                    <th>Group ID's</th>
                    <th>Group Email's</th>
                    <th>Projects</th>
                    <th>Average GPA</th>


                  </tr>

        <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tr>
                    <td style="text-align:center;"> <br><?php echo $row['Group_no'];?></td>
                    <td><?php echo $row['Name1'];?> <br> <?php echo $row['Name2'];?><br> <?php echo $row['Name3'];?><br> <?php echo $row['Name4'];?></td>
                      <td><?php echo $row['GPA1'];?> <br> <?php echo $row['GPA2'];?><br> <?php echo $row['GPA3'];?><br> <?php echo $row['GPA4'];?></td>
                      <td><?php echo $row['ID1'];?> <br> <?php echo $row['ID2'];?> <br> <?php echo $row['ID3'];?> <br> <?php echo $row['ID4'];?> </td>
                      <td><?php echo $row['Email1'];?> <br> <?php echo $row['Email2'];?> <br><?php echo $row['Email3'];?> <br><?php echo $row['Email4'];?></td>
                      <td><?php echo $row['Project1'];?> <br> <?php echo $row['Project2'];?> <br><?php echo $row['Project3'];?> <br><?php echo $row['Project4'];?><br><?php echo $row['Project5'];?></td>
                      <td style="text-align:center;"> <br><?php echo $row['AVG_GPA'];?></td>



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
