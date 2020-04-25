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

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <title>TEST</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
        <?php top_bar(); ?>


        <div class="card shadow mb-4 container">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary ">ADAUGĂ MEDIC NOU </h6>
                </div>

                	<form action="./adauga_medici_date.php" method="post">
                <div class="card-header py-3 align-items-center justify-content-between">
                  <p class="">Numele </p>
                   <input type="text" class=" col-xs-2 form-control " name="nume_medic" id="nume_medic"></input>

                   <p class="">Prenume </p>
                   <input type="text" class=" col-xs-2 form-control " name="prenume_medic" id="prenume_medic"></input>

                   <p class="">Specializare</p>
                   <input type="text" class=" col-xs-2 form-control " name="specializare_medic" id="specializare_medic"></input>

                   <p class="">Anul absolvirii facultății de medicină</p>
                   <input type="text" class=" col-xs-2 form-control " name="an_absolvire_facultate" id="an_absolvire_facultate"></input>
                   <p class="">Numarul cabinetului</p>
                   <input type="text" class=" col-xs-2 form-control " name="nr_cabinet" id="nr_cabinet"></input>
                    <p class="">Email</p>
                   <input type="text" class="col-xs-2 form-control" name="Email" id="Email" required></input>
                   <p class=""><span style="font-weight: bold;">Repeta Email</span></p>
                   <input type="text" class="col-xs-2 form-control" name="Emailv" id="Emailv" required></input>

                   <p class="">CNP</p>
                   <input type="text" class=" col-xs-2 form-control " name="cnp" id="cnp"></input>
                   <br>
                      <button type="submit"  name ="adauga_medici" class=" btn btn-sm btn-primary"><i class="fas fa-check"></i> Adaugă un medic nou</button>

                </div> 
                	<form>
              </div>

        </form>
      </div>
    </div>



</div>

</body>
</html>