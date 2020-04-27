<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
require_once 'small-stats.php';
    $link = mysqli_connect("localhost", "root", "", "licenta");
    $CNP_medic=$_SESSION['CNP'];
      $sql = "SELECT *  from medici WHERE CNP='$CNP_medic'";
      $result = mysqli_query($mysqli, $sql);
      while($row = mysqli_fetch_assoc($result)) {
            $id_medic=$row['ID'];  
                              }

            $sql2="SELECT * FROM programari WHERE ID_Medic='$id_medic'";                    
            $result2=mysqli_query($mysqli,$sql2);
            while ($row2 = mysqli_fetch_assoc($result2))
            {
              $ora=$row2['Ora'];
              $data_programare=['Data'];

            }
    echo '
    <html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <title>SPIKECSI-MED - Medic</title>
</head>
<body>
<div id="wrapper">';
sidebar();
echo' 
<div id="content-wrapper" style="d-flex flex column">
        ';     top_bar();
        echo' <div class="card shadow mb-4 container">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary ">Lisa Programari: </h6>
                </div>'.$data_azi.'</div>';

    mysqli_close($link);
?> 