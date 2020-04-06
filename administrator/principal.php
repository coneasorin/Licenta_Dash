<?php
require_once 'components/sidebar.php';
require_once 'components/top-bar.php';
require_once 'components/small-stats.php';
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <title>asd</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
        <?php      top_bar();
        small_stats(); ?>
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
     ?>
    </div>


</div>

</body>
</html>