<?php
   session_start();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Vistas/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/css/adminlte.min.css">
</head>

  <?php
    if(isset($_SESSION["ingreso"]) && $_SESSION["ingreso"]==true)
    {
  ?>
  <body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php 
  include "Vistas/modulos/encabezado.php";
  include "Vistas/modulos/menu.php";
?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
    if(isset($_GET["url"])){
      if ($_GET["url"]=="dashboard" || $_GET["url"]=="alumnos"
           || $_GET["url"]=="personal" || $_GET["url"]=="usuarios"
           || $_GET["url"]=="vehiculos"){
        include "Vistas/modulos/".$_GET["url"].".php";
      }
    }
    ?>
  </div>
  <!-- ./content-wrapper -->
<?php
  include "Vistas/modulos/footer.php";
?>
</div>
<!-- ./content-wrapper -->
<?php
}
 else
 {
 include "Vistas/modulos/ingreso.php";
 }
?>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="Vistas/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Vistas/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Vistas/js/adminlte.min.js"></script>
</body>
</html>
