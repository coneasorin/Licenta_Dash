<?php
$link = mysqli_connect("localhost", "root", "", "licenta");
if (isset($_POST['cauta_pacient'])) {
    
    if ($link === false) {
        die("Eroare la conectarea la baza de date " . mysqli_connect_error());
    }

    $cnp_pacient = mysqli_real_escape_string($link, $_REQUEST['cnp_pacient']);

    echo '
            <html>
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <title>Lista analize</title>
</head>
<body>
<div id="wrapper">
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
</style>';
          $mysqli = new mysqli("localhost", 'root', '', 'licenta');
     //  $sql = "SELECT * from pacienti WHERE CNP=$CNP";
     //  $result = mysqli_query($mysqli, $sql);
     // while($row = mysqli_fetch_assoc($result)) {
     //        $Inaltime=$row['Inaltime'];  
     //        $Greutate=$row['Greutate'];
     //        $varsta=$row['Varsta'];}
           

            $mysqli = new mysqli("localhost", 'root', '', 'licenta'); 
$query = "SELECT * FROM analize WHERE CNP=$cnp_pacient order by data desc";
 
 
echo '<table border="2" cellspacing="2" cellpadding="2" style="height:50px; text-align:center;"> 
<br><br>
<h3 style="text-align:center;">Analize</h3><br>
      <tr> 
          <td> <font face="Arial"><span style="font-weight:bold;">WBC (leucocite)</span> <br>Normal:(4,0 - 10,0)</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">LYM (limfocite)</span><br>Normal:(1,7 - 9,3)</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">MON (monocite)</span><br>Normal:(20,5 - 51,1)</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">GRA (granulocite)</span><br>Normal:(1,7 - 9,3)</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">HgB (hemoglobina)</span><br>Normal:(42,2 - 75,2)</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Plt (trombocite)</font><br>Normal:(150 - 450)</td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Data recoltarii</span></font></td>
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
$query = "SELECT * FROM reteta WHERE cnp_pacient=$cnp_pacient order by data desc";
 
 
echo '<table border="2" cellspacing="2" cellpadding="2" style="height:50px; text-align:center;"> 
<br><br>
<h3 style="text-align:center;">Diagnostice</h3><br>
      <tr> 
          <td> <font face="Arial"><span style="font-weight:bold;">Nume Medic</font></td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Diagnostic</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Reteta </font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Observatii</font> </td> 
          <td> <font face="Arial"><span style="font-weight:bold;">Data </font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
    
        $cnp_medic = $row["cnp_medic"];
        $diagnostic = $row["diagnostic"];
        $reteta = $row["reteta"];
        $observatii = $row["observatii"]; 
        $data = $row["data"]; 
          $sql = "SELECT * FROM medici where CNP='$cnp_medic'";
$result = mysqli_query($mysqli, $sql);
while($row = mysqli_fetch_assoc($result)) {
        $nume_medic=$row['Numele'];  
        $prenume_medic=$row['Prenumele'];
    }

        echo '<tr> 
                  <td>'.$nume_medic." ".$prenume_medic.'</td> 
                  <td>'.$diagnostic.'</td> 
                  <td>'.$reteta.'</td> 
                  <td>'.$observatii.'</td> 
                  <td>'.$data.'</td> 
              </tr>';
    }

    $result->free();
}  ';


    '   ;
    mysqli_close($link);
}
?> 