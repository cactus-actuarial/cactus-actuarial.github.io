<?php

require_once('load.php');
include('header.php');
echo navbar("tools");

?>

<h2 style="text-align: center; font-family: Lato;">Tools</h2>

<hr style="border: 0.5px solid grey"/>

<h3>Model points visualizer</h3>

<p>R Shiny application to visualize the Model Point Files data. Application is suited for Prophet software model points. It allows to have a quick look into distributions of underlying data. Possible extensions: aggregating data for several products, correlations between variables, comparison of data year-to-year.</p>

<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column"><img src="img/mpf-big-1.png" onclick="openModal(1);currentSlide(1, 1)" class="hover-shadow" style="width:200px"></div>
  <div class="column"><img src="img/mpf-big-2.png" onclick="openModal(1);currentSlide(2, 1)" class="hover-shadow" style="width:200px"></div>
  <div class="column"><img src="img/mpf-big-3.png" onclick="openModal(1);currentSlide(3, 1)" class="hover-shadow" style="width:200px"></div>
</div>

<!-- The Modal/Lightbox -->
<div id="modal1" class="modal">
  <span class="close cursor" onclick="closeModal(1)">&times;</span>
  <div class="modal-content">
    <div class="mySlides1">
      <div class="numbertext">1 / 3</div>
      <img src="img/mpf-big-1.png" style="width:100%">
    </div>
    <div class="mySlides1">
      <div class="numbertext">2 / 3</div>
      <img src="img/mpf-big-2.png" style="width:100%">
    </div>
    <div class="mySlides1">
      <div class="numbertext">3 / 3</div>
      <img src="img/mpf-big-3.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
    <!-- Caption text -->
    <div class="caption-container"><p id="caption"></p></div>

    <!-- Thumbnail image controls -->
    <div class="column"><img class="demo1" src="img/mpf-big-1.png" onclick="currentSlide(1, 1)" alt="Model Points visualizer" style="width:200px"></div>
    <div class="column"><img class="demo1" src="img/mpf-big-2.png" onclick="currentSlide(2, 1)" alt="Model Points visualizer" style="width:200px"></div>
    <div class="column"><img class="demo1" src="img/mpf-big-3.png" onclick="currentSlide(3, 1)" alt="Model Points visualizer" style="width:200px"></div>
  </div>
</div>
<br />


<hr style="border: 0.5px solid grey"/>

<h3>Central Limit Theorem</h3>

<p>R Shiny application to visualize Central Limit Theorem.</p>

<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column"><img src="img/clt-1.png" onclick="openModal(2);currentSlide(1, 2)" class="hover-shadow" style="width:200px"></div>
  <div class="column"><img src="img/clt-2.png" onclick="openModal(2);currentSlide(2, 2)" class="hover-shadow" style="width:200px"></div>
</div>

<!-- The Modal/Lightbox -->
<div id="modal2" class="modal">
  <span class="close cursor" onclick="closeModal(2)">&times;</span>
  <div class="modal-content">
    <div class="mySlides2">
      <div class="numbertext">1 / 2</div>
      <img src="img/clt-1.png" style="width:100%">
    </div>
    <div class="mySlides2">
      <div class="numbertext">2 / 2</div>
      <img src="img/clt-2.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
    <!-- Caption text -->
    <div class="caption-container"><p id="caption"></p></div>

    <!-- Thumbnail image controls -->
    <div class="column"><img class="demo2" src="img/clt-1.png" onclick="currentSlide(1, 2)" alt="Central Limit Theorem" style="width:200px"></div>
    <div class="column"><img class="demo2" src="img/clt-2.png" onclick="currentSlide(2, 2)" alt="Central Limit Theorem" style="width:200px"></div>
  </div>
</div>
<br />



<script>
// Open the Modal
function openModal(id) {
  document.getElementById('modal'+id).style.display = "block";
}

// Close the Modal
function closeModal(id) {
  document.getElementById('modal'+id).style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex, id);

// Next/previous controls
function plusSlides(n, id) {
  showSlides(slideIndex += n, id);
}

// Thumbnail image controls
function currentSlide(n, id) {
  showSlides(slideIndex = n, id);
}

function showSlides(n, id) {
  var i;
  var slides = document.getElementsByClassName("mySlides"+id);
  var dots = document.getElementsByClassName("demo"+id);
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<?php
include('footer.php');
?>