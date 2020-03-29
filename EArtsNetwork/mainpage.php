<?php
include ("../includefail/connection_eArtsNetwork.php");
// include("../includefail/header.php");  
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- slider -->


<!-- slider -->
</head>
<style>

</style>

<div class="topnav">
  <a href="#home" class="active">eArts Network</a>
  <a href="#service">Service</a>
  <a href="#about">About</a>
  <div class="login-container">
  <a href="#login">Login</a>
  <a href="#signup">Sign up</a>
  </div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!-- slider -->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/DSC_1297.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/PTA_5405.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/DSC_2994.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!-- end slider -->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

//slider
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>
</body>
<?php include("../includefail/footer.php"); ?>