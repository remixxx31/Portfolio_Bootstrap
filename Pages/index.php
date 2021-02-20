<?php ob_start();?>
<!-- Caroussel -->
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

        <!-- progress-bar -->
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
  <!-- Card 1 -->
  <div class="container text-center" id="portfolio">
        <h2 class="m-5 perso_colorBlueLight">Mon Portfolio</h2>
        
        <div class="card-group">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Cours Javascript</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/cours1.png" class="d-block w-100"/>
                </div>
                 <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours1">En savoir plus</button>
                  </div>
    </div>
<!-- card 2 -->
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Cours PHP</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/cours1.png" class="d-block w-100"/>
                </div>
                 <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">En savoir plus</button>
                  </div>
            </div>
<!-- card 3 -->
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Cas pratique PHP / MySQL</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/catalogue.png" class="d-block w-100"/>
                </div>
                 <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#catalogue">En savoir plus</button>
                  </div>
            </div>
<!-- Modal 1 -->
  </div>
<div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cours Javascript</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../sources/images/cours1.png" class="d-block w-100" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit, 
          corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2 -->

<div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cours PHP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../sources/images/cours3.png" class="d-block w-100" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit, 
          corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 3 -->

<div class="modal fade" id="catalogue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cas pratique PHP / MySQL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../sources/images/cours1.png" class="d-block w-100" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit, 
          corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
  
  
<div class="container text-center" id="temoignage">
      <h2 class="m-5 perso_colorBlueLight">Mes témoignages</h2>
    <div class='row'>
<!--image1 -->
      <div class="col-12 col-lg-4">
          <img src="../sources/images/aigle.jpg" class="perso_ImageRonde img-fluid m-auto" alt="aigle">
            <h3>Client 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
              eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis 
              commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
          </div>
<!--image2 -->
  <div class="col-12 col-lg-4">
      <img src="../sources/images/loup.jpg" class="perso_ImageRonde img-fluid m-auto" alt="loup">
        <h3>Client 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
          eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis 
          commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
        </div>
<!--Image3-->
  <div class="col-12 col-lg-4">
      <img src="../sources/images/chat.jpg" class="perso_ImageRonde img-fluid m-auto" alt="chat">
        <h3>Client 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
           eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis 
           commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
      </div>
  </div>
  </div>
</div>
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>