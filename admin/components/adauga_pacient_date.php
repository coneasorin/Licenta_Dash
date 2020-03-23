<?php
$link = mysqli_connect("localhost", "root", "", "licenta");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$CNP = mysqli_real_escape_string($link, $_REQUEST['CNP']);
$Parola = mysqli_real_escape_string($link, $_REQUEST['Parola']);
$Nume = mysqli_real_escape_string($link, $_REQUEST['Nume']);
$Prenume = mysqli_real_escape_string($link, $_REQUEST['Prenume']);
$Varsta = mysqli_real_escape_string($link, $_REQUEST['Varsta']);
$Inaltime = mysqli_real_escape_string($link, $_REQUEST['Inaltime']);
$Greutate = mysqli_real_escape_string($link, $_REQUEST['Greutate']);
$Grupa_sange = mysqli_real_escape_string($link, $_REQUEST['Grupa_sange']);

  echo " TEST";
$sql = "INSERT INTO pacienti (CNP, Parola, Nume, Prenume, Varsta, Inaltime, Greutate, Grupa_sange) VALUES ('$CNP', '$Parola', '$Nume', '$Prenume', '$Varsta', '$Inaltime', '$Greutate', '$Grupa_sange')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>