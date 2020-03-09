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
        Panou de comanda
      </div>

         <!-- Statistici -->
      <li class="nav-item">
        <a class="nav-link" href="components/">
          <span>Statistici Clinica</span>
        </a>
      </li>


        <!-- Adauga Pacient -->
      <li class="nav-item">
        <a class="nav-link" href="components/adauga_pacient.php/">
          <span>Adauga Pacient</span>
        </a>
      </li>


      <!-- Adauga Analize -->
      <li class="nav-item">
        <a class="nav-link" href="components/adauga_analize.php/">
          <span>Adauga Analize</span>
        </a>
      </li>



      <!-- Adauga Medici -->
      <li class="nav-item">
        <a class="nav-link" href="components/adauga_medici.php/">
          <span>Adauga Medici</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    </ul>';

}


?>
 
