<?php
        function small_stats ()
        {

                //Numarul de pacienti inregistrati
       $mysqli = new mysqli("localhost", 'root', '', 'licenta');
      $sql = "SELECT count(CNP) as nr_pacienti from pacienti";
      $result = mysqli_query($mysqli, $sql);

      while($row = mysqli_fetch_assoc($result)) {
            $num_conturi=$row['nr_pacienti'];  
                              }

                //Numarul de medici            
      $sql2 = "SELECT count(CNP) as nr_medici from medici";
      $result2 = mysqli_query($mysqli, $sql2);

      while($row2 = mysqli_fetch_assoc($result2)) {
            $num_medici=$row2['nr_medici'];  
                              }



                                //Numarul de pacienti infectati            
      $sql3 = "SELECT p_infectate from statistici";
      $result3 = mysqli_query($mysqli, $sql3);

      while($row3 = mysqli_fetch_assoc($result3)) {
            $pers_infectate=$row3['p_infectate'];  
                              }

                               //Numarul de pacienti vindecati            
      $sql4 = "SELECT p_vindecate from statistici";
      $result4 = mysqli_query($mysqli, $sql4);

      while($row4 = mysqli_fetch_assoc($result4)) {
            $pers_vindecate=$row4['p_vindecate'];  
                              }

                              //Numarul de pacienti decedati            
      $sql5 = "SELECT p_decedate from statistici";
      $result5 = mysqli_query($mysqli, $sql5);

      while($row5 = mysqli_fetch_assoc($result5)) {
            $pers_decedate=$row5['p_decedate'];  
                              }

            print '<div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Conturi Create-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pacienti inregistrati</div>

                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$num_conturi.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-heartbeat fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Numarul medicilor</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$num_medici.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-medkit fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         <!-- PERSOANE INFECTATE UPDATE-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Persoane infectate: <span style="font-size:20px; color: black;">'.$pers_infectate.' </span></div>
                      <div class="row no-gutters align-items-center">

                         <form action="./update/update_pers_infectate.php" method="post">

                        <div class="col" style="display:flex;flex-direction:row;">
                          <input type="text-primary" class=" form-control" name="infectate" id="infectate">

                          <button type="submit" name="update_persoane_infectate"><i class="fas fa-check-circle"></i></button>

                          </form>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
            
  <!-- PERSOANE VINDECATE UPDATE-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Persoane vindecate: <span style="font-size:20px; color: black;">'.$pers_vindecate.'</span></div>
                      <div class="row no-gutters align-items-center">
                        
                         <form action="./update/update_pers_vindecate.php" method="post">

                        <div class="col" style="display:flex;flex-direction:row;">
                          <input type="text-primary" class=" form-control" name="vindecate" id="vindecate">

                          <button type="submit" name="update_persoane_vindecate"><i class="fas fa-check-circle"></i></button></form>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

  <!-- PERSOANE DECEATE UPDATE-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Persoane decedate: <span style="font-size:20px; color: black;">'.$pers_decedate.'</span></div>
                      <div class="row no-gutters align-items-center">
                        
                         <form action="./update/update_pers_decedate.php" method="post">

                        <div class="col" style="display:flex;flex-direction:row;">
                          <input type="text-primary" class=" form-control" name="decedate" id="decedate">

                          <button type="submit" name="update_persoane_decedate"><i class="fas fa-check-circle"></i></button></form>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">

              <!-- ANUNT -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-danger">Atentie</h6>
                </div>
                <div class="card-body border-left-danger">
                  <p>Va rugam sa fiti atenti la modificarea datelor, acestea sunt afisate instant pacientilor nostrii.</p>
                  <p class="mb-0">Dupa fiecare sesiune va rugam sa va deconectati de pe contul dvs. de admin.</p>
                </div>
              </div>

            </div>
          </div>

        </div>';

        }

?>