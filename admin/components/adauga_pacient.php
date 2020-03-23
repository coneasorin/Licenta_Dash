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
  <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

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
                  <h6 class="m-0 font-weight-bold text-primary ">Adauga pacient </h6>
                </div>

                     <form action="adauga_pacient_date.php" method="post">
                <div class="card-header py-3 align-items-center justify-content-between">
               
                  <p class="">CNP</p>
                   <input type="text" class=" col-xs-2 form-control " name="CNP" id="CNP"></input>
                   <p class="">Parola</p>
                   <input type="password" class="col-xs-2 form-control" name="parola" id="parola"></input>
                   <p class="">Nume</p>
                   <input type="text" class="col-xs-2 form-control" name="Nume" id="Nume"></input>
                   <p class="">Prenume</p>
                   <input type="text" class="col-xs-2 form-control" name="Prenume" id="Prenume"></input>
                   <p class="">Varsta</p>
                   <input type="text" class="col-xs-2 form-control" name="Varsta" id="Varsta"></input>
                   <p class="">Inaltime</p>
                   <input type="text" class="col-xs-2 form-control" name="Inaltime" id="Inaltime"></input>
                   <p class="">Greutate</p>
                   <input type="text" class="col-xs-2 form-control" name="Greutate" id="Greutate"></input>
                   <p class="">Grupa Sanuina</p>
                   <input type="text" class="col-xs-2 form-control" name="grupa_sange" id="grupa_sange"></input>
                   <br>
                    <button type="submit" class=" btn btn-sm btn-primary"> <i class="fas fa-check"></i> Adauga Pacient  </button>
                </div>
                  </form>
              </div>

        </form>
      </div>
    </div>



</div>

</body>
</html>