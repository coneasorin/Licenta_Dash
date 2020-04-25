<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <title>Programari</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
        <?php top_bar();
         $mysqli = new mysqli("localhost", 'root', '', 'licenta');
        //Neurologie
        echo '
          <p style="text-align:center;font-weight:bold;font-size:30px;">Fa-ti o programare on-line</p>
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Neurologie</h6>
                </div>
                <div class="card-body border-left-success">';
                   $result = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Neurologie'");
        echo"<select name='ID' style='width:20%;'>";
          while ($row = $result->fetch_assoc()) {
            unset($ID,$Numele,$Prenumele);
            $ID = $row['ID'];
            $Numele = $row['Numele'];
            $Prenumele = $row['Prenumele'];
           echo '<option value="'.$ID.'">'.$Numele." ".$Prenumele.'</option>';
         }
                   echo"</select>";
                echo'
                </div>
              </div>';
              //Pediatrie
         echo '
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Pediatrie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Pediatrie'");
        echo"<select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2,$Specializare2,$nr_cabinet2);
            $ID2 = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
            $Specializare2 = $row2['Specializare'];
            $nr_cabinet2 = $row2['nr_cabinet'];
           echo '<option name="'.$ID2.'" value="'.$ID2.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>';
                       echo'<input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Vezi ID">';
                echo'
                </div>
              </div></form>';
  
              //Cardiologie
               echo '
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Pneumologie</h6>
                </div>
                <div class="card-body border-left-success">


                </div>
              </div>';
              //Oncologie
               echo '
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Cardiologie</h6>
                </div>
                <div class="card-body border-left-success">


                </div>
              </div>';
              //Hematologie
               echo '
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Hematologie</h6>
                </div>
                <div class="card-body border-left-success">


                </div>
              </div>';
        ?>

      </div>
</div>
</body>
</html>