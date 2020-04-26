<?php
$mysqli = new mysqli("localhost", 'root', '', 'licenta');
  session_start(); 

  if (!isset($_SESSION['CNP'])) {
  header("location: ../index.php");
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
$sql = "SELECT Nume, Prenume FROM pacienti where CNP='$CNP'";
$result = mysqli_query($mysqli, $sql);

while($row = mysqli_fetch_assoc($result)) {
        $nume_pacient=$row['Nume'];  
        $prenume_pacient=$row['Prenume'];
    }
    print '
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bun venit,  <span style="font-size:15px;font-weight:bold;">'.$nume_pacient.' '.$prenume_pacient.'</span></span>
                <a href="index.php?logout" style="color:red ">Deconectare</a>
             
              
            </li>

          </ul>

        </nav>';

}
?>
