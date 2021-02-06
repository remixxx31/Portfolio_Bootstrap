<?php ob_start();?>

<div id="carouselExampleIndicators" class="carousel slide perso_linear_Bgblue" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="bg-dark" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../sources/images/cours1.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/cours3.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/catalogue.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="container border border-dark text-center">
    <h2 class="m-4 perso_colorBlueLight">Rémi : Développeur web junior</h2>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ipIQK_pNGyo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

 <button class="btn btn-success">Valider</button>
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>