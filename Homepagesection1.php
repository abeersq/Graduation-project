<!DOCTYPE html>
<?php include("header.php");

if(isset($_POST['Submit'])){
header("Location:/GP/GPfile.php");

}

?>

<div class="backgroundpic"></div>

<!---start section 2-->

  <div class="sec2-box" >

<div class="row">

  <div class="column">
    <div class="card">
      <a href="Gpfile.php">
      <img src="news.png" alt="newspic" ></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a href="Gpfile.php">
 <img src="document.png" alt="GpFilepic"></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a href="Calendar.php">
     <img src="calendar.png" alt="Calenderepic" ></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!---<a href="">----->
        <img src="online-chat.png"><button class="open-button" onclick="openForm()"></button>


      <div class="chat-popup" id="myForm">
  <form action="" class="chat-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
    </div>
  </div>

</div>
</div>
<!---end section2------>

<!-------search----->
<div class="container">
  <div class="row searchFilter" >
     <div class="col-sm-12" style="margin-top:-62px;">
      <div class="input-group" >
       <input id="table_filter" type="text"  style="height:66px; width:540px;  margin-left: 145px;"class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Type here ....." >
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


        <input type="button" name="button" class="btn btn-secondary btn-search" value="Search" id="button"  style="height:66px; width:40px;   transform: translate(-120px, -1px); ">

       </div>
      </div>
     </div>
  </div>
</div>
<!------ footer------->
<div class="footer">

<div class="footer-btn">&copy;GraduationProjectsGP.com    (&reg;2020)</div>

</div>
<!------end Footer -------->
<script type="text/javascript">


 function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

        </script>
</script>
</body>
</html>
