<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="  ../../css/sb-admin-2.min.css" rel="stylesheet">

  <title>Adaugare Analize</title>
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
        echo'     <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Lista medicilor din unitatea medicala</h6>
                </div>
                <div class="card-body border-left-success">';

            $mysqli = new mysqli("localhost", 'root', '', 'licenta'); 
$query = "SELECT * FROM medici";
 
 
echo '<table border="2" cellspacing="2" cellpadding="2" style="height:50px;"> 
      <tr> 
          <td> <font face="Arial">Numele</font> </td> 
          <td> <font face="Arial">Prenumele</font> </td> 
          <td> <font face="Arial">Specializare</font> </td> 
          <td> <font face="Arial">Anul absolvitii facultatii<br> de medicina</font> </td> 
          <td> <font face="Arial">Nr. cabinet</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Numele = $row["Numele"];
        $Prenumele = $row["Prenumele"];
        $Specializare = $row["Specializare"];
        $Absolvit = $row["Absolvit"]; 
          $nr_cabinet = $row["nr_cabinet"]; 
 
        echo '<tr> 
                  <td>'.$Numele.'</td> 
                  <td>'.$Prenumele.'</td> 
                  <td>'.$Specializare.'</td> 
                  <td>'.$Absolvit.'</td> 
                  <td>'.$nr_cabinet.'</td> 
              </tr>';
    }
    $result->free();
} 

        ?>
      </div></div>
    </div>



</div>

</body>
</html>