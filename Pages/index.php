<?php ob_start();?>

<div id="carouselExampleIndicators" class="carousel slide perso_linear_Bgblue" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="bg-dark" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../sources/images/cours1.png" 
      class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/cours3.png" 
      class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/catalogue.png" 
      class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
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

<div class="container text-center" id="presentation">
    <h2 class="m-4 perso_colorBlueLight">Rémi : Développeur web junior</h2>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" width="560" height="315" 
      src="https://www.youtube.com/embed/ipIQK_pNGyo" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
  <div class="container text-center" id="competences">
      <h2 class="m-5 perso_colorBlueLight">Mes compétences</h2>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 my-4">
              <h3>HTML / CSS</h3>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" 
                    style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>

          <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>PHP / POO</h3>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" 
              style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
          </div>  

        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>Javascript/ Node.JS</h3>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" 
                  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
              </div>  

        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>Analyse / Conception</h3>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" 
                  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
              </div>  

        <div class="col-12 col-md-6 col-xl-4 my-4">
           <h3>SQL/ POO</h3>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" 
                  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
              </div>  

        <div class="col-12 col-md-6 col-xl-4 my-4">
           <h3>Graphisme</h3>
              <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" 
                  style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
              </div>  
  </div>
  <div class="container text-center" id="portfolio">
        <h2 class="m-5 perso_colorBlueLight">Mon Portfolio</h2>
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success">Cours Javascript</div>
            <div class="card-body text-success p-0">
                <img src="../sources/images/cours1.png" class="d-block w-100"/>
        </div>
        <div class="card-footer bg-transparent border-success">
        <button type="button" class="btn btn-primary">En savoir plus</button>
        </div>
  </div>
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>