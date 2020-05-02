<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>
  <link href="../css/style.min.css" rel="stylesheet">

  <title>Lista analize</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
        <?php top_bar();
          $CNP=$_SESSION['CNP'];
          $mysqli = new mysqli("localhost", 'root', '', 'licenta');
      $sql = "SELECT * from pacienti WHERE CNP=$CNP";
      $result = mysqli_query($mysqli, $sql);
     while($row = mysqli_fetch_assoc($result)) {
            $Inaltime=$row['Inaltime'];  
            $Greutate=$row['Greutate'];
            $Email=$row['Email'];
            $nr_tel=$row['Numar_telefon'];
            }

      echo'
            <center><p style="font-size:30px;text-weight:bold;text-align:center">Actualizare date:</p>
            <form action="./update_date_cont.php">
            <input type="submit" class=" btn btn-sm btn-primary" id="actualizeaza_date" name="actualizeaza_date" value="Actualizeaza datele" style="text-align:center;"></center>
      <div class=row>
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inaltime</div>
                      <div class="h5 mb-0 font-weight-bold text">'.$Inaltime."CM".'</div>
                          <input type="text" id="update_inaltime" name="update_inaltime" class="form-control" style="width:50%;margin-top:10px;">
                    </div>
                    <div class="col-auto">
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Greutate</div>
                      <div class="h5 mb-0 font-weight-bold text">'.$Greutate."KG".'</div>
                      <input type="text" id="update_greutate" name="update_greutate" class="form-control" style="width:50%;margin-top:10px;">
                    </div>
                    <div class="col-auto">
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>      
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Numar de telefon</div>
                      <div class="h5 mb-0 font-weight-bold text">'.$nr_tel.'</div>
                      <input type="text" id="update_tel" name="update_tel" class="form-control" style="width:50%;margin-top:10px;">
                    </div>
                    <div class="col-auto">
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Email</div>
                      <div class="h5 mb-0 font-weight-bold text">'.$Email.'</div>
                      <input type="text" id="update_email" name="update_email" class="form-control" style="width:50%;margin-top:10px;">
                    </div>
                    <div class="col-auto">
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Parola</div>
                      <p>Parola veche</p>
                      <input type="password" id="parola_veche" name="parola_veche" class="form-control" style="width:50%;margin-top:10px;">
                      <p>Parola nouă</p>
                      <input type="password" id="parola_noua" name="parola_noua" class="form-control" style="width:50%;margin-top:10px;">
                      <p>Repetă parola nouă</p>
                      <input type="password" id="parola_noua" name="parola_noua_repetat" class="form-control" style="width:50%;margin-top:10px;">
                    </div>
                    <div class="col-auto">
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            </form>';
?>
              </div>

      </div></div>

    </div>

</div>

</body>
</html>