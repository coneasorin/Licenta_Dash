<?php
if (isset($_POST['adauga_medici'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("Nu s-a putut realiza conexiunea cu baza de date. " . mysqli_connect_error());
    }

    $nume_medic = mysqli_real_escape_string($link, $_REQUEST['nume_medic']);
    $Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
    $Emailv = mysqli_real_escape_string($link, $_REQUEST['Emailv']);
    $prenume_medic = mysqli_real_escape_string($link, $_REQUEST['prenume_medic']);
    $specializare_medic = mysqli_real_escape_string($link, $_REQUEST['specializare_medic']);
    $an_absolvire_facultate = mysqli_real_escape_string($link, $_REQUEST['an_absolvire_facultate']);
     $nr_cabinet = mysqli_real_escape_string($link, $_REQUEST['nr_cabinet']);
    $cnp = mysqli_real_escape_string($link, $_REQUEST['cnp']);
    $parola=md5($cnp);
    $parola =substr($parola, -10);
    if (strcmp($Email, $Emailv  ) == 0 && is_string($nume_medic) && is_string($prenume_medic) && is_numeric($an_absolvire_facultate) && is_numeric($nr_cabinet) && (strlen($cnp)==13) && is_string($specializare_medic)) {
    $sql = "INSERT INTO medici (Numele, Prenumele, Specializare, Absolvit, CNP, Email, nr_cabinet, parola)

        VALUES ('$nume_medic', '$prenume_medic', '$specializare_medic', '$an_absolvire_facultate', '$cnp','$Email','$nr_cabinet','$parola')";
    if(mysqli_query($link, $sql)){
        echo "Datele au fost adăugate cu succes.";
         $catre      = $Email;
$subiect = 'Date atuentificare SPIKECSI-MED';
$mesaj = "Nume de utilizator: ".$cnp."Parola: ".$parola;
$antet = array(
    'From' => 'SPIKECSI-MED',
    'Reply-To' => 'Localhost',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($catre, $subiect, $mesaj, $antet);
    } else{  echo "Eroare la adăugarea detelor in DB. " . mysqli_error($link); }
    }
    else
    {
        echo "Te rog să verifici dacă emailul este valid";
    }
    mysqli_close($link);
}
?> 