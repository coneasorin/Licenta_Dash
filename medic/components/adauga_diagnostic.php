<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../../css/style.min.css" rel="stylesheet">

  <title>Adaugare Analize</title>
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
                 <h6 class="m-0 font-weight-bold text-primary " style="text-align:center;">Adaugați un diagnostic </h6>
                </div>

                 <form action="./adauga_diagnostic_date.php" method="post">
                <div class="card-header py-3 align-items-center justify-content-between">
                  <p class="">CNP</p>
                   <input type="text-primary" class="col-xs-2 form-control" name="CNP" id="CNP" required>
                  
                   <p class="">Diagnostic</p>
                   <textarea class="col-xs-2 form-control" rows="5"  name="diagnostic" id="diagnostic" required> </textarea>
                  
                    <p class="">Rețetă </p>
                    <textarea class="col-xs-2 form-control" rows="5"  name="reteta" id="reteta" required> </textarea>
                  
                    <p class="">Dată </p>
                    <input type="date" class="col-xs-2 form-control" name="data" id="data" required>
                  
                    <p class="">Observatii:</p>
                    <input type="text-primary" class="col-xs-2 form-control" name="observatii" id="observatii" >
                    <br>


                    <button type="submit" name="adauga_diagnostic" class=" btn btn-sm btn-primary"><i class="fas fa-check"></i>Adauga Diagnostic</button>
                </div>
                  <form>
              </div>

        </form>
      </div>
    </div>



</div>

</body>
</html>