<?php ob_start();?>
  
<div class="container text-center" id="presentation">
    <h2 class="m-4 perso_colorBlueLight">Mes informations personelles</h2>


<table class="table table-borderless">
          <thead>
              <tr>
                  <td><img src="../Sources\images\tel.png" width="100px" /></td>
                  <td><img src="../Sources\images\yt.png" width="100px" /></td>
                  <td><img src="../Sources\images\fb.png" width="100px"/></td>
              </tr>
          </thead>
          <tbody>
                <tr>
                    <td>06 70 42 68 75</td>
                    <td><a href="https://www.youtube.com/watch?v=KNbD0Mlg_9c" target=_blank>Benjamin Code</a></td>
                    <td><a href="https://fr-fr.facebook.com/h2prog/?ref=page_internal" target=_blank>H2PROG</a></td>
                </tr>
          </tbody>
    </table>
</div>
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>