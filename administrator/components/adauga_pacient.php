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

  <link href="../../css/style.min.css" rel="stylesheet">

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

                     <form action="./adauga_pacient_date.php" method="post">
                <div class="card-header py-3 align-items-center justify-content-between">
               
                  <p class="">CNP</p>
                   <input type="text" class=" col-xs-2 form-control " name="CNP" id="CNP" required></input>
                   <p class="">Număr de telefon</p>
                   <input type="text" class="col-xs-2 form-control" name="Numar_telefon" id="Numar_telefon" required></input>
                   <p class="">Email</p>
                   <input type="text" class="col-xs-2 form-control" name="Email" id="Email" required></input>
                   <p class=""><span style="font-weight: bold;">Repeta Email</span></p>
                   <input type="text" class="col-xs-2 form-control" name="Emailv" id="Emailv" required></input>
                   <p class="">Nume</p>
                   <input type="text" class="col-xs-2 form-control" name="Nume" id="Nume" required></input>
                   <p class="">Prenume</p>
                   <input type="text" class="col-xs-2 form-control" name="Prenume" id="Prenume"required></input>
<!--                    <p class="">Vârstă</p>
                   <input type="text" class="col-xs-2 form-control" name="Varsta" id="Varsta" required></input> -->
                   <p class="">Inălțime(cm)</p>
                   <input type="text" class="col-xs-2 form-control" name="Inaltime" id="Inaltime" required></input>
                   <p class="">Greutate(kg)</p>
                   <input type="text" class="col-xs-2 form-control" name="Greutate" id="Greutate" required></input>
                   <p class="">Grupa Sangvină</p>
                   <input type="text" class="col-xs-2 form-control" name="Grupa_sange" id="grupa_sange" required></input>
                   <br>
                   <input type="submit" class=" btn btn-sm btn-primary" name="adauga_pacient" value="Adauga Pacient">
                </div>
                  </form>
              </div>

        </form>
      </div>
    </div>



</div>

</body>
</html>