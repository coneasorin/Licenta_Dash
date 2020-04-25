<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <title>Lista analize</title>
</head>
<body>
<div id="wrapper">
    <?php
    sidebar();
    ?>
    <div id="content-wrapper" style="d-flex flex column">
      <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
        <?php top_bar();
          $CNP=$_SESSION['CNP'];
          $mysqli = new mysqli("localhost", 'root', '', 'licenta');
      $sql = "SELECT * from pacienti WHERE CNP=$CNP";
      $result = mysqli_query($mysqli, $sql);
     while($row = mysqli_fetch_assoc($result)) {
            $Inaltime=$row['Inaltime'];  
            $Greutate=$row['Greutate'];}
            
        echo'     <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Buletinul de analize</h6>
                </div>
                <div class="card-body border-left-success">';

            $mysqli = new mysqli("localhost", 'root', '', 'licenta'); 
$query = "SELECT * FROM analize WHERE CNP=$CNP order by data desc";
 
 
echo '<table border="2" cellspacing="2" cellpadding="2" style="height:50px;"> 
      <tr> 
          <td> <font face="Arial">WBC (leucocite)</font> </td> 
          <td> <font face="Arial">LYM (limfocite)</font> </td> 
          <td> <font face="Arial">MON (monocite)</font> </td> 
          <td> <font face="Arial">GRA (granulocite)</font> </td> 
          <td> <font face="Arial">HgB (hemoglobina)</font> </td> 
          <td> <font face="Arial">Plt (trombocite)</font> </td> 
          <td> <font face="Arial">Data recoltarii</font> </td>
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $WBC = $row["WBC"];
        $LYM = $row["LYM"];
        $MON = $row["MON"];
        $GRA = $row["GRA"]; 
        $HgB = $row["HgB"]; 
        $Plt = $row["Plt"]; 
        $data = $row["data"]; 
 
        echo '<tr> 
                  <td>'.$WBC.'</td> 
                  <td>'.$LYM.'</td> 
                  <td>'.$MON.'</td> 
                  <td>'.$GRA.'</td> 
                  <td>'.$HgB.'</td> 
                  <td>'.$Plt.'</td>
                  <td>'.$data.'</td 
              </tr>';
    }
    $result->free();
} 
$IMC=intval($Greutate/pow($Inaltime/100,2));
if($IMC>=18.5 && $IMC<=24.9)
{  echo' <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Indicele masei corporale</div>
                      <div class="h5 mb-0 font-weight-bold text-success">'.$IMC.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fire fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  <p style="font-size:10px;" class="font-weight-bold text-success">Felicitări,IMC prezintă un risc scăzut pentru sănătatea dvs. </p>
                </div>
              </div>
            </div>
            </div>';
  }
  else
  {
    if($IMC>=25 && $IMC <=29.9)
    {
         echo' <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Indicele masei corporale</div>
                      <div class="h5 mb-0 font-weight-bold text-warning">'.$IMC.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fire fa-2x text-gray-300"></i>
                    </div>
                  </div>
                   <p style="font-size:10px;" class="font-weight-bold text-warning">Atenție constituie un pericol mediu pentru sănătatea dvs.</p>
                </div>
              </div>
            </div>
            </div>';
      }
      else
      {
        if($IMC >=30)
        {
             echo' <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Indicele masei corporale</div>
                      <div class="h5 mb-0 font-weight-bold text-danger">'.$IMC.'</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fire fa-2x text-gray-300"></i>
                    </div>
                  </div>
                 <p style="font-size:10px; color:red;">Atenție constituie un pericol pentru sănătatea dvs.</p>
                </div>
              </div>
            </div>
            </div>';
        }
      }

  }
        ?>
      </div></div>
    </div>



</div>

</body>
</html>