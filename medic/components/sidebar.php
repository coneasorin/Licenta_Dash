<?php

function sidebar ()
{

print '
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
        Link-uri utile
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Grafice -->
      <li class="nav-item">
        <a class="nav-link" href="/Licenta_Dash/medic/components" target="_top">
          <span>Grafice</span>
        </a>
      </li>


      <!-- Analize -->
      <li class="nav-item">
      <a class="nav-link" href="/Licenta_Dash/medic/components/adauga_diagnostic.php" target="_top">
          <span>Adauga Diagnostic</span>
        </a>
      </li>


      <!-- Programari -->
      <li class="nav-item">
        <a class="nav-link" href="/Licenta_Dash/medic/components/programari.php" >
          <span>Programari</span>
        </a>
      </li>


      <!-- Medici -->
      <li class="nav-item">
        <a class="nav-link" href="/Licenta_Dash/medic/components/lista_medici.php" target="_top">
          <span>Lista Medici</span>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

    </ul>';

}


?>
 
