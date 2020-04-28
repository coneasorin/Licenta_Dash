<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
require_once 'small-stats.php';
?>
<!DOCTYPE html>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>


  <link href="../css/style.min.css" rel="stylesheet">

  <title>Software medical - PACIENT</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
        <?php   top_bar(); 
        small_stats();?>
    </div>


</div>

</body>
</html>