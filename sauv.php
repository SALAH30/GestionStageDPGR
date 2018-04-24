<?php

if(isset($_POST["submit1"]) )
      {
    header('Location: export_cher.php');
}

if(isset($_POST["submit2"]) )
      {
     header('Location: export_stage.php');
}

if(isset($_POST["submit3"]) )
      {
    header('Location: export_universite.php');
}

if(isset($_POST["submit4"]) )
      {
     header('Location: export_labo.php');
}

?>