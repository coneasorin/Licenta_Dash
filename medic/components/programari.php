<?php
require_once 'sidebar.php';
require_once 'top-bar.php';
require_once 'small-stats.php';
?>
    <html>
    <head>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">
        <script src="https://kit.fontawesome.com/319610a3d1.js" crossorigin="anonymous"></script>

        <link href="../../css/style.min.css" rel="stylesheet">

        <title>SPIKECSI-MED - Medic</title>
    </head>
<body>
<div id="wrapper">
<?php sidebar(); ?>
    <div id="content-wrapper" style="d-flex flex column">
<?php top_bar(); ?>
    <div class="card shadow mb-4 container">
    <div class="card-header py-3 ">
        <h6 class="m-0 font-weight-bold text-primary " style="text-align:center;">Lisa Programari: </h6>
    </div>
<?php
$link = mysqli_connect("localhost", "root", "", "licenta");
$CNP_medic = $_SESSION['CNP'];

$sql = "SELECT * from medici WHERE CNP='$CNP_medic'";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id_medic = $row['ID'];
}
//Am aflat ID MEDIC
$data_azi = date("Y-m-d");

?>
    <table border="2" cellspacing="2" cellpadding="2" style="height:50px; text-align:center;">
        <br><br>
        <h3 style="text-align:center;">Programari</h3><br>
        <tr>
            <td><font face="Arial"><span style="font-weight:bold;">Nume Pacient</font></td>
            <td><font face="Arial"><span style="font-weight:bold;">Ora</font></td>
            <td><font face="Arial"><span style="font-weight:bold;">Data</font></td>
        </tr>
<?php
$sql2 = "SELECT * FROM programari ORDER BY Data DESC";
$result2 = mysqli_query($link, $sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
    $ora = $row2["Ora"];
    $data = $row2["Data"];
    $id_medic_programari=$row2["ID_Medic"];
    $cnp_pacient = $row2["CNP_PACIENT"];
    //Aflu data si ora programarii
    $sql3 = "SELECT * FROM pacienti WHERE CNP ='$cnp_pacient' ";
    $result3 = mysqli_query($link, $sql3);
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $nume_pacient = $row3["Nume"];
        $prenume_pacient = $row3["Prenume"];
       // echo "ID_Programari=".$id_medic_programari."   ID=".$id_medic;
        if (($data==$data_azi)&&($id_medic==$id_medic_programari)) {
            echo '
                <tr>
                    <td>' . $nume_pacient . " " . $prenume_pacient . '</td>
                    <td>' . $ora . '</td>
                    <td>' . $data . '</td>
                </tr>
                ';
        }
    }
  


}  echo $data_azi;
echo '
        </div>
        ';

mysqli_close($link);
?>