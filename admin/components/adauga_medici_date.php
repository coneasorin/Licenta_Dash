<?php
echo "SALAM fiert";
if (isset($_POST['adauga_medici'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $nume_medic = mysqli_real_escape_string($link, $_REQUEST['nume_medic']);
    echo $nume_medic;
    $prenume_medic = mysqli_real_escape_string($link, $_REQUEST['prenume_medic']);
    $specializare_medic = mysqli_real_escape_string($link, $_REQUEST['specializare_medic']);
    $an_absolvire_facultate = mysqli_real_escape_string($link, $_REQUEST['an_absolvire_facultate']);
    $CNP = mysqli_real_escape_string($link, $_REQUEST['CNP']);
 
    $sql = "INSERT INTO medici (Numele, Prenumele, Specializare, Absolvit, CNP) 
        VALUES ('$nume_medic', '$prenume_medic', '$specializare_medic', '$an_absolvire_facultate', '$CNP')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>