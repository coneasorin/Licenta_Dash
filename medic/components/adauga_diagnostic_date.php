<?php
if (isset($_POST['adauga_diagnostic'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");
     session_start();
    if ($link === false) {
        die("Eroare la conectarea la baza de date " . mysqli_connect_error());
    }

    $CNP_medic=$_SESSION['CNP'];
    $CNP_pacient = mysqli_real_escape_string($link, $_REQUEST['CNP']);
    $diagnostic = mysqli_real_escape_string($link, $_REQUEST['diagnostic']);
    $reteta = mysqli_real_escape_string($link, $_REQUEST['reteta']);
    $data = mysqli_real_escape_string($link, $_REQUEST['data']);
    $observatii = mysqli_real_escape_string($link, $_REQUEST['observatii']);

    $sql = "INSERT INTO reteta (cnp_medic, cnp_pacient, diagnostic, reteta, data, observatii) 
        VALUES ('$CNP_medic', '$CNP_pacient', '$diagnostic', '$reteta', '$data', '$observatii')";
    if(mysqli_query($link, $sql)){
        echo "Datele au fost adaugate cu succes.";
    } else{
        echo "NU am putut adauga datele. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?> 