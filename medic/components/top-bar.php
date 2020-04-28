<?php
  $mysqli = new mysqli("localhost", 'root', '', 'licenta');
  session_start(); 

  if (!isset($_SESSION['CNP'])) {
  header("location: ./login.php");
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
  }

?>


<?php
function top_bar ()
{
  $mysqli = new mysqli("localhost", 'root', '', 'licenta');
  $CNP=$_SESSION['CNP'];
$sql = "SELECT *  from medici WHERE CNP='$CNP'";
      $result = mysqli_query($mysqli, $sql);
      while($row = mysqli_fetch_assoc($result)) 
      {
            $nume_medic=$row['Numele'];  
             $prenume_medic=$row['Prenumele'];  
      }



    print '
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <form action="../components/cauta_pacient.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cauta pacient dupa CNP" aria-label="Search" id="cnp_pacient" name="cnp_pacient" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" name ="cauta_pacient" id="cauta_pacient" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bun venit,  <span style="font-size:15px;font-weight:bold;">'.'DR. '.$nume_medic." ".$prenume_medic.'</span></span>
                <a href="index.php?logout" style="color:red ">Deconectare</a>
             
              
            </li>

          </ul>

        </nav>';

}
?>
