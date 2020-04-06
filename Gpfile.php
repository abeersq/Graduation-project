<!DOCTYPE html>
<?php

	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		$query ="SELECT * FROM Project_Archive WHERE CONCAT(`Title`) LIKE '%".$valueToSearch."%'";
		$query2 ="SELECT * FROM Keyword WHERE CONCAT(`P_Keyword`) LIKE '%".$valueToSearch."%'";
	$filter_Result = mysqli_query($c);

		if ($valueToSearch === $query) {
			$search_result = filterTable($query);
		}elseif ($valueToSearch === $query2) {
			$search_result = filterTable($query2);
		}

	}
	else {
		$query = "SELECT * FROM Project_Archive INNER JOIN Keyword ON Project_Archive.ArchiveID = Keyword.ArchiveID;";
		$search_result = filterTable($query);
	}
	 function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "","GP");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

?>
<html>
<head>
	<title>Gp File</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Gpfile.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-----header--->
<div style="align-items:center;">
<div class="navbar">
  <img src="imam logo.jpg" alt="logo1" >
  <img src="imam logo2.jpg" alt="logo2" style="margin-right:15%;" >
  <a href="#MyProfile">MyProfile</a>
  <a href="Homepagesection1.php">Home</a>
  <a href="Gpfile.html">Gp File</a>
  <img src="https://i.imgur.com/atzKUZU.png" alt="Graduation logo"style="width:60px ;height: 60px;">
  <a href="#AboutUs">About Us</a>
  <a href="mailto:cs.gp.f@imamu.edu.sa">Contact Us</a>
  <a href="/gp/forms/login.php">Login</a>
  </div>
</div>
<!-------------------end header---->
<div class="container">
<div class="row">
  <!-- BEGIN SEARCH RESULT -->
  <div class="col-md-12">
    <div class="grid search">
      <div class="grid-body">
        <div class="row">
          <!-- BEGIN FILTERS -->
          <div class="col-md-3">
            <h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>
            <hr>

            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>By category:</h4>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> All</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Software</label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Research </label>
            </div>


            <!-- END FILTER BY CATEGORY -->

            <div class="padding"></div>

            <!-- BEGIN FILTER BY DATE -->
            <h4>By date:</h4>
            From
            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
              <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span><input type="date" class="form-control">

            </div>
            <input type="hidden" id="dtp_input1" value="">

            To
            <div class="input-group date form_date"  data-link-field="dtp_input2">
               <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span><input type="date" class="form-control">

            </div>
            <input type="hidden" id="dtp_input2" value="">
            <!-- END FILTER BY DATE -->

          <div class="padding"></div> </div>
          <!-- END FILTERS -->
          <!-- BEGIN RESULT -->
          <div class="col-md-9">
            <h2><i class="fa fa-file-o"></i> Result</h2>
            <hr>
            <!-- BEGIN SEARCH INPUT -->
						<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="GPfile.php" method="post">
							<div class="input-group">
								<input type="text" class="form-control bg-light border-0 small" name="valueToSearch" placeholder="..." aria-label="Search" aria-describedby="basic-addon2">
								<div class="input-group-btn">
									<input class="btn btn-primary" name="search" type="submit" value="Search">
								</form>
								</div>
							</div>
									<br><br>
            <!-- END SEARCH INPUT -->
            <p>Showing all results matching :</p>

            <div class="padding"></div>

            <div class="row">
              <!-- BEGIN ORDER RESULT -->
              <div class="col-sm-6">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Order by <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Title </a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Supervisor Name </a></li>
                  </ul>
                </div>
              </div>
              <!-- END ORDER RESULT -->

              <div class="col-md-6 text-right">

              </div>
            </div>

            <!-- BEGIN TABLE RESULT -->
            <div class="table-responsive">
              <table class="table table-hover">
								<?php while($row = mysqli_fetch_array($search_result)):?>
									<tr>
									<td class="number text-center"><?php echo $row['ArchiveID'];?></td>
										<td></td>
									<td class="project-name"><?php echo $row['Title'];?>
										<details> <summary>View abstract </summary><p> <?php echo $row['Abstract'];?> </p>  </details></td>


									<td class="supervisor text-right"><?php echo $row['GPfile'];?>
										 <details> <summary>View Keywords </summary><p> <?php echo $row['P_Keyword'];?> </p>  </details></td>
								<td></td>
								</tr>
                  <?php endwhile;?>
						</table>
						</form>

          </div>
          <!-- END RESULT -->
</div>
</div>
      </div>
    </div>
  </div>
  <!-- END SEARCH RESULT -->
</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
