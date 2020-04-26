<?php

function sidebar ()
{

print '
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="localhost/admin/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-notes-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPIKECSI-MED</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Panou de comandă
      </div>

         <!-- Statistici -->
      <li class="nav-item">
        <a class="nav-link" href="./" target="_self">
          <span>Statistici Clinică</span>
        </a>
      </li>


        <!-- Adauga Pacient -->
      <li class="nav-item">
        <a class="nav-link" href="./adauga_pacient.php" target="_self">
          <span>Adaugă Pacient</span>
        </a>
      </li>


      <!-- Adauga Analize -->
      <li class="nav-item">
        <a class="nav-link" href=".a/dauga_analize.php" target="_self">
          <span>Adaugă Analize</span>
        </a>
      </li>



      <!-- Adauga Medici -->
      <li class="nav-item">
        <a class="nav-link" href="./adauga_medici.php" target="_self">
          <span>Adaugă Medici</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    </ul>';

}


?>
 
