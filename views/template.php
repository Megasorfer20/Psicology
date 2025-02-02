<?php 

/* Capturar las rutas de la URL */
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
#print_r($routesArray[3]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include "views/modules/navbar.php"?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
<?php include "views/modules/sidebar.php"?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
/*     echo "<pre>";
    print_r($routesArray);
    echo "</pre>"; */

    if (!empty($routesArray[3])){
      if ($routesArray[3] == "clinicHistory" || 
          $routesArray[3] == "interviews" || 
          $routesArray[3] == "psychologists" ||
          $routesArray[3] == "treatment" ||
          $routesArray[3] == "users"){
          include "views/pages/".$routesArray[3]."/".$routesArray[3].".php";
      }
    } else {
      include "views/pages/home/home.php";
    }
    ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "modules/footer.php";?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
