<!DOCTYPE html>
<?php
include("dbConn.php");

	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		$query ="SELECT * FROM Project_Archive INNER JOIN Keyword ON Project_Archive.ArchiveID = Keyword.ArchiveID WHERE CONCAT(`Title`,`Abstract`,`P_Keyword`) LIKE '%".$valueToSearch."%'";
						 $search_result = filterTable($query);

	}elseif (isset($_POST['GO'])) {
		$Filter = $_POST['filter'];
		$query ="SELECT * FROM Project_Archive JOIN Idea ON Project_Archive.Title	 = Idea.Title WHERE CONCAT(`TYPE`) LIKE '%".$Filter."%'";
		$search_result = filterTable($query);
	}	elseif (isset($_POST['GOO'])) {
		$Filter2 = $_POST['filter2'];
		$query ="SELECT * FROM Project_Archive JOIN Project ON Project_Archive.Title = Project.Title WHERE CONCAT(`Sem_year`) LIKE '%".$Filter2."%'";
		$search_result = filterTable($query);
	}else {
		$query = "SELECT * FROM Project_Archive INNER JOIN Keyword ON Project_Archive.ArchiveID = Keyword.ArchiveID JOIN Project ON Project_Archive.Title = Project.Title WHERE Sem_year='2020';";
		$search_result = filterTable($query);
	}
	 function filterTable($query)
	{
		global $conn;
		$filter_Result = mysqli_query($conn, $query);
		return $filter_Result;
	}

?>
<html>
<head>
	<title>Gp File</title>
	<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/atzKUZU.png" />

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
	<img src="https://i.imgur.com/smWDiAB.jpg" alt="logo1" >
	<img src="https://i.imgur.com/JOkbszT.jpg" alt="logo2" style="margin-right:15%;" >


	<a href="Homepagesection1.php">Home</a>
	<a href="Gpfile.php">Gp File</a>
	<img src="https://i.imgur.com/atzKUZU.png" alt="Graduation logo"style="width:60px ;height: 60px;">
	<a href="about us/index.html">About Us</a>
	<a href="/gp/forms/contact.php">Contact Us</a>
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
						<form action="GPfile.php" method="post">

            <h4>By category:</h4>

            <div class="checkbox">
              <label><input type="checkbox" name="filter" id="filter[]" class="icheck" value="Software"> Software</label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="filter" id="filter[]" class="icheck" value="Research"> Research </label>
            </div>
						<input class="btn btn-primary" name="GO" type="submit" value="GO">


						<h4>By date:</h4>

						<div class="checkbox">
							<label><input type="checkbox" name="filter2" id="filter2[]" class="icheck" value="2020" checked="checked"> 2020 </label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="filter2" id="filter2[]" class="icheck" value="2019"> 2019 </label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="filter2" id="filter2[]" class="icheck" value="2018"> 2018 </label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="filter2" id="filter2[]" class="icheck" value="2017"> 2017 </label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="filter2" id="filter2[]" class="icheck" value="2016"> 2016</label>
						</div>
						<input class="btn btn-primary" name="GOO" type="submit" value="GO">

					</form>


            <!-- END FILTER BY CATEGORY  AND DATE-->

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
