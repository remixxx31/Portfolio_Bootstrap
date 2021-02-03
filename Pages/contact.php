<?php ob_start();?>
  
<h1>Page de Contact</h1>
 
  <?php
    $content = ob_get_clean();
    require "commons/template.php";
  ?>