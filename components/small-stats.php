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

 
 
 
$dataPoints = array(
  array("x"=> 10, "y"=> 41),
  array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
  array("x"=> 30, "y"=> 50),
  array("x"=> 40, "y"=> 45),
  array("x"=> 50, "y"=> 52),
  array("x"=> 60, "y"=> 68),
  array("x"=> 70, "y"=> 38),
  array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
  array("x"=> 90, "y"=> 52),
  array("x"=> 100, "y"=> 60),
  array("x"=> 110, "y"=> 36),
  array("x"=> 120, "y"=> 49),
  array("x"=> 130, "y"=> 41)
);
  
    
          echo '<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Simple Column Chart with Index Labels"
  },
  data: [{
    type: "column", //change type to bar, line, area, pie, etc
    //indexLabel: "{y}", //Shows y value on all Data Points
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints:  echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>';
            print '<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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

            <!-- Earnings (Monthly) Card Example -->
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

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pacienti recuperati</div>
                      <div class="h5 mb-0 font-weight-bold text-success">'.$pers_vindecate.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-virus-slash fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pacienti decedati</div>
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

                   

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-danger">INFORMTATII UTILE PRIVINT NOUL VIRUS COVID19</h6>
                </div>
                <div class="card-body border-left-danger">
                  <p>Avand in vedere evolutia virusul va rugam sa respectati cu strictete masurile de igiena personala:</p>
                  <p> Spalati-va pe maini ori de cate ori aveti ocazia</p>
                  <p> Evitati locurile aglomerate </p>
                </div>
              </div>
        


              <div class="card shadow col-xl-3 col-md-6 mb-4">
                <div class="card-header py-2 shadow h-100">
                  <h6 class="m-0 font-weight-bold text-info">Starea vaccinului</h6>
                </div>
                <div class="card-body border-left-danger">
                  <h4 class="small font-weight-bold">Starea gasirii unui vaccin <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6> 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw →</a>
                </div>
              </div>

            

            </div>
          </div>

        </div>';
        

        }

?>