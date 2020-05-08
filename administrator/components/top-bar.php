<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<?php

function top_bar ()
{

    print '
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMINISTRATOR</span>
                <a href="index.php?logout" style="color:red ">Deconectare</a>


              </a>
              
            </li>

          </ul>

        </nav>';

}
?>
