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


          <!-- Nume pacient -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bun venit,  <span style="font-size:15px;font-weight:bold;">'.$nume_pacient.' '.$prenume_pacient.'</span></span>
                <a href="index.php?logout" style="color:red ">Deconectare</a>
             
              
            </li>

          </ul>

        </nav>';

}
?>
