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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Statistici la nivelul spitalului</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">



            <!-- Medici de garda-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Medici de garda</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-notes-medical fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Persoane Infectate -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Cazuri de COVID19 identificate</div>
                      <div class="h5 mb-0 font-weight-bold text-danger">'.$pers_infectate.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-lungs-virus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Persoane recuperate -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pacienți recuperati</div>
                      <div class="h5 mb-0 font-weight-bold text-success">'.$pers_vindecate.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-virus-slash fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Persoane decedate -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pacienți decedati</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$pers_decedate.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cross fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>              

              <!-- Informatii -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-danger" style="text-align: cente">INFORMAȚII UTILE PRIVIND NOUL VIRUS COVID19</h6>
                </div>
                <div class="card-body border-left-danger">
                 
<center><p><b>Spălaţi-vă mâinile</b>
frecvent cu apă şi săpun sau curatati-le cu un dezinfectant de mâini pe bază de alcool</p>


<p><b>Acoperiti-va gura
gura și nasul </b>dacă stranuti sau tușiți. Nu vă atingeți ochii cu mâinile.</p>


<p><b>Evitaţi contactul
direct</b> cu orice persoană care are simptome de răceală sau gripă</p>


<p><b>Curățați toate suprafețele</b>
cu dezinfectanți ce conțin, clor, înălbitori, solvent, etanol de 75%, acid peracetic</p>


<p><b>Adresaţi-vă medicului</b>
Adresaţi-vă medicului dacă aveţi febră, tuşiți sau respiraţi greu;</p></center>
                </div>
              </div>
        

          <div class="row">


            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-3">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Statistici</h6> 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">';
                require_once 'chart.php';
                 print ' </div> 
                </div>
              </div>

            </div>
             <div class="col-lg-4 mb-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cum se raspândeste ?</h6>
                </div>
                <div class="card-body">
                  <p><span style="font-size:20px; font-weight:bold;">Covid-19</span> este un virus respirator care se răspândeşte în primul rând prin contactul cu o persoană infectată prin inhalarea unor particule provenite din tuse, strănut, picături de salivă, secreţii nazale. Este importantă exersarea unei igiene respiratorii bune. Când strănutaţi sau tuşiţi, apropiaţi gura de partea inferioară a cotului sau folosiţi şervetele pe care aruncati-le imediat la coşul de gunoi. Spălaţi-vă cât mai des pe mâini şi folosiţi geluri antibacteriene pe bază de alcool.</p>
                  <a target="_blank" rel="nofollow" href="https://stirioficiale.ro/informatii">Informează-te de surse oficiale →</a>
                </div>
              </div>

          </div>
          <div class="col-lg-4 mb-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cazuri confirmate pe județe. </h6>
                </div>
                <div class="card-body">
                  <iframe scrolling="no" src="https://datelazi.ro/embed/counties-map" width="100%" height="500"></iframe>
                </div>
              </div>

          </div>
<div class="col-lg-4 mb-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cazuri confirmate pe județe, listă. </h6>
                </div>
                <div class="card-body">
                  <iframe scrolling="yes" src="https://datelazi.ro/embed/counties-table" width="100%" height="500"></iframe>
                </div>
              </div>
</div>
<div class="col-lg-4 mb-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Vârsta  medie ca cazurilor de îmbolnăvire?</h6>
                </div>
                <div class="card-body">
               <iframe scrolling="no" src="https://datelazi.ro/embed/varsta-medie" width="100%" height="525"></iframe>

                </div>
              </div>

          </div>
        </div>
        '
        ;
        

        }

?>