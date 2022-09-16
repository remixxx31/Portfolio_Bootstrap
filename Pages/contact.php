<?php ob_start();?>
  
<div class="container text-center">
    <h2 class="m-4 perso_colorBlueLight">Mes informations personelles</h2>


    <table class="table table-borderless">
              <thead>
                  <tr>
                      <td><img src="../Sources\images\tel.png" width="100px" /></td>
                      <td><i class="fa-brands fa-linkedin fa-5x" width="50px"></i>
                        <!-- <img src="../Sources\images\yt.png" width="100px" /></td> -->
                  </tr>
              </thead>
              <tbody>
                    <tr>
                        <td>06 70 42 68 75</td>
                        <td><a href="https://www.linkedin.com/in/remi-perray2020/" target=_blank>Remi PERRAY</a></td>
                    </tr>
              </tbody>
     </table>   
</div>

  <div class="container text-center">
          <h2 class="m-4 perso_colorBlueLight">Formulaire de contact</h2>
          <form method="POST" action="">
              <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre adresse ici">
              </div>
              
              <div class="form-group">
                  <label for="objet" class="form-label">Objet</label>
                  <select class="form-control" id="objet" name="objet">
                        <option value="question">Question</option>
                        <option value="remarque">Remarque</option>
                        <option value="Autre">Autre</option>
                  </select>
                      
                      <div class="mb-3">
                          <label for="message">Message: </label>
                          <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                      </div>

              </div>
                  <button type="submit" class="btn btn-primary">Valider </button>
        </form>
  </div>
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>