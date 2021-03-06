<?php
  
  include 'db.php';

  $query = "SELECT * FROM introduction";
  $result = mysqli_query($conn,$query);

  
?>

<!DOCTYPE html>
<html lang="en">
<title>CP1_Online Examination</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<div>

</div>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">SOME NAME</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Me</b></h4>
    <div class="w3-content w3-justify" style="max-width:600px">

      <table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td>Name</td>
    <td>Age</td>
    <td>Email</td>
    <td>Update</td>
  </tr>
     <? while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['cp1_name']."</td>";
    echo "<td>".$res['cp1_email']."</td>";
    echo "<td>".$res['cp1_bday']."</td>";
    echo "<td>".$res['cp1_pos_applied']."</td>";
    echo "<td>".$res['cp1_answer']."</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  }
  ?>



      <hr class="w3-opacity">
      <h4 class="w3-padding-16">Technical Skills</h4>
      <p class="w3-wide">Photography</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:65%">65%</div>
      </div>
      <p class="w3-wide">Programming</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:65%">65%</div>
      </div>
      <p class="w3-wide">Photoshop</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:60%">60%</div>
      </div>
      <p><button class="w3-button w3-light-grey w3-padding-large w3-margin-top w3-margin-bottom">Download Resume</button></p>
      <hr class="w3-opacity">
    </div>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>


</body>
</html>
