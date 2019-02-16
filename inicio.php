<?php 
include 'header.html';
include 'footer.html';
?>
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/office1.jpg" height="550px" alt="Primeiro">
      <div class="carousel-caption d-none d-md-block">
        <h1><i class="fas fa-code"> Control</i></h1>
        <p>Gestão de funcionários</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/office2.jpg" height="550px" alt="Segundo">
      <div class="carousel-caption d-none d-md-block">
        <h1><i class="fas fa-code"> Control</i></h1>
        <p>Gestão de funcionários</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/office3.jpg" height="550px" alt="Terceiro">
      <div class="carousel-caption d-none d-md-block">
        <h1><i class="fas fa-code"> Control</i></h1>
        <p>Gestão de funcionários</p>
      </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>