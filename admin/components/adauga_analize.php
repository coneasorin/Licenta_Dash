<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

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
                  <h6 class="m-0 font-weight-bold text-primary ">Adauga analize unui pacient existent </h6>
                </div>


                <div class="card-header py-3 align-items-center justify-content-between">
                  <p class="">CNP</p>
                   <input type="text-primary" class="col-xs-2 form-control" name="CNP">
                  
                   <p class="">WBC (leucocite) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="wbc">
                  
                    <p class="">LYM (limfocite) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="lym">
                  
                    <p class="">MON (monocite) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="mon">
                  
                    <p class="">GRA (granulocite) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="gra">


                    <p class="">HgB (hemoglobina) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="hgb">

                    <p class="">Plt (trombocite) </p>
                    <input type="text-primary" class="col-xs-2 form-control" name="plt">


                    <a href="#" class=" btn btn-sm btn-primary"><i class="fas fa-check"></i> Adauga Pacient</a>
                </div>

              </div>

        </form>
      </div>
    </div>



</div>

</body>
</html>