<?php

function top_bar ()
{

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
              <a class="nav-link dropdown-toggle" href="logout.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Conea Sorin</span>
                <img class="img-profile rounded-circle" src="https://spikecsi.com/wp-content/uploads/2020/01/Artboard-1.png">
              </a>
              
            </li>

          </ul>

        </nav>';

}
?>