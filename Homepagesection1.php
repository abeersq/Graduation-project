<?php include("header.php");

?>
<title>Home</title>
<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/atzKUZU.png" />

<div class="backgroundpic"></div>

  <div class="sec2-box" >

<div class="row">

  <div class="column">
    <div class="card">
      <a href="news.php">
      <img src="https://i.imgur.com/DBbTrJE.png" alt="newspic" ></a>
      <label>News</label>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a href="Gpfile.php">
 <img src="https://i.imgur.com/lmafjvu.png" alt="GpFilepic"></a>
 <label>GP files</label>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a href="calendar.php">
     <img src="https://i.imgur.com/3Wlju02.png" alt="Calenderepic" ></a>
     <label>Calendar</label>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <a href="/gp/forms/contact.php">
        <img src="https://i.imgur.com/SQK0Osx.png"></a>
        <label>Contact</label>
</div>
    </div>
  </div>


</div>
</div>
<!---end section2------>

<!-------search----->
<div class="container">
  <div class="row searchFilter" >
    <form action="GPfile.php" method="post">

     <div class="col-sm-12" style="margin-top:-62px;">
      <div class="input-group" >
       <input id="table_filter" type="text" name="valueToSearch" style="height:66px; width:540px;  margin-left: 145px;"class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Type here ....." >
       <div class="input-group-btn" >
        <button type="button"  style="height:66px; width:40px; margin-right: 122px;"class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
<div class="dropdown-menu dropdown-menu-right"style="margin-right:290px;" >
           <ul class="category_filters" >
            <li >
             <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" >All</label>
            </li>
            <li >
             <input type="radio" name="radios" id="Software" value="Software" ><label class="category-label" for="Software" >Software</label>
            </li>
            <li >
             <input type="radio" name="radios" id="Resaerch" value="Resaerch" ><label class="category-label" for="Resaerch" >Resaerch</label>
            </li>
           </ul>
        </div>
        <input type="Submit" name="search" class="btn btn-secondary btn-search" value="Search"  style="height:66px; width:40px;   transform: translate(-120px, -1px); ">
       </div>
      </div>
     </div>
   </form>
  </div>
</div>
<!------ footer------->
<div class="footer">

<div class="footer-btn">&copy;GraduationProjectGP.com </div>

</div>
<!------end Footer -------->

</body>
</html>
