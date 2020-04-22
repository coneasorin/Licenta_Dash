<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
?>
<html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                  <h6 class="m-0 font-weight-bold text-success" style="text-align: center">Buletinul de analize</h6>
                </div>
                <div class="card-body border-left-success">';

            $mysqli = new mysqli("localhost", 'root', '', 'licenta'); 
$query = "SELECT * FROM analize order by data desc";
 
 
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

        ?>
      </div></div>
    </div>



</div>

</body>
</html>