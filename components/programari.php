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
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Neurologie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Neurologie'");
        echo"<center><select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2);
            $ID = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
           echo '<option value="'.$ID.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>
              <select id="ora" name="ora">
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  </select>
  <input type="date" id="data" name="data" min="2020-03-19"  value="2020-03-20" max="2030-01-01">
              <input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Solicita o programare">
                </div>
              </div></form></center>';
              //Pediatrie
         echo '
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Pediatrie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Pediatrie'");
        echo"<center><select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2);
            $ID = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
           echo '<option name="'.$ID.'" value="'.$ID.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>
              <select id="ora" name="ora">
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  </select>
  <input type="date" id="data" name="data" min="2020-03-19"  value="2020-03-20" max="2030-01-01">
              <input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Solicita o programare">
                </div>
              </div></form></center>';
  
              //Cardiologie
                echo '
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Cardiologie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Cardiologie'");
        echo"<center><select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2);
            $ID = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
           echo '<option name="'.$ID.'" value="'.$ID.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>
              <select id="ora" name="ora">
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  </select>
  <input type="date" id="data" name="data" min="2020-03-19"  value="2020-03-20" max="2030-01-01">
              <input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Solicita o programare">
                </div>
              </div></form></center>';
              //Oncologie
                echo '
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Oncologie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Oncologie'");
        echo"<center><select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2);
            $ID = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
           echo '<option name="'.$ID.'" value="'.$ID.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>
              <select id="ora" name="ora">
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  </select>
  <input type="date" id="data" name="data" min="2020-03-19"  value="2020-03-20" max="2030-01-01">
              <input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Solicita o programare">
                </div>
              </div></form></center>';
              //Hematologie
                echo '
         <form action="./programari_date.php" method="post">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Hematologie</h6>
                </div>
                <div class="card-body border-left-success">';
                       $result2 = $mysqli->query("select ID,Numele, Prenumele from medici WHERE Specializare='Hematologie'");
        echo"<center><select name='ID2' style='width:20%;'>";
          while ($row2 = $result2->fetch_assoc()) {
            unset($ID2,$Numele2,$Prenumele2);
            $ID = $row2['ID'];
            $Numele2 = $row2['Numele'];
            $Prenumele2 = $row2['Prenumele'];
           echo '<option name="'.$ID.'" value="'.$ID.'">'.$Numele2." ".$Prenumele2.'</option>';
         }
              echo '</select>
              <select id="ora" name="ora">
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  </select>
  <input type="date" id="data" name="data" min="2020-03-19"  value="2020-03-20" max="2030-01-01">
              <input type="submit" class=" btn btn-sm btn-primary" name="programari_date" value="Solicita o programare">
                </div>
              </div></form></center>';
        ?>

      </div>
</div>
</body>
</html>