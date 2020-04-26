<?php
if (isset($_POST['adauga_pacient'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $CNP = mysqli_real_escape_string($link, $_REQUEST['CNP']);
    $Parola=md5($CNP);
    $Parola =substr($Parola, -10);
    function varsta($CNP) {
    
    $anul_nasterii = ($CNP[1] * 10) + $CNP[2];
    switch( $CNP[0] ) {
        case 1  : case 2 : { $anul_nasterii += 1900; } break; // cetateni romani nascuti intre 1 ian 1900 si 31 dec 1999
        case 3  : case 4 : { $anul_nasterii += 1800; } break; // cetateni romani nascuti intre 1 ian 1800 si 31 dec 1899
        case 5  : case 6 : { $anul_nasterii += 2000; } break; // cetateni romani nascuti intre 1 ian 2000 si 31 dec 2099
        case 7  : case 8 : case 9 : {                           // Cetateni Straini
            $anul_nasterii += 2000;
            if($anul_nasterii > (int)date('Y')-14) {
                $anul_nasterii -= 100;
            }
        } break;
        default : {
            return false;
        } break;
    }
    return $anul_nasterii;
}
    $Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
    $Emailv = mysqli_real_escape_string($link, $_REQUEST['Emailv']);
    $Nume = mysqli_real_escape_string($link, $_REQUEST['Nume']);
    $Prenume = mysqli_real_escape_string($link, $_REQUEST['Prenume']);
    $an_curent=date("Y");
    $Varsta = $an_curent - varsta($CNP);
    // echo " Tocmai am adaugat in baza de date pacientul cu CNP". $CNP . " Avand anul nasterii= ".varsta($CNP)." si varsta = ". $Varsta; 
    $Inaltime = mysqli_real_escape_string($link, $_REQUEST['Inaltime']);
    $Greutate = mysqli_real_escape_string($link, $_REQUEST['Greutate']);
    $Grupa_sange = mysqli_real_escape_string($link, $_REQUEST['Grupa_sange']);
        $Numar_telefon = mysqli_real_escape_string($link, $_REQUEST['Numar_telefon']);
    if (strcmp($Email, $Emailv  ) == 0) {

         $sql = "INSERT INTO pacienti (CNP, Parola, Email, Nume, Prenume, Varsta, Inaltime, Greutate, Grupa_sange,Numar_telefon) 
       VALUES ('$CNP', '$Parola','$Email', '$Nume', '$Prenume', '$Varsta', '$Inaltime', '$Greutate', '$Grupa_sange','$Numar_telefon')";
     if(mysqli_query($link, $sql)){
         echo "Datele au fost adăugate cu succes.";
                    $catre      = $Email;
$subiect = 'Date atuentificare SPIKECSI-MED';
$mesaj = "Nume de utilizator: ".$CNP."Parola: ".$Parola;
$antet = array(
    'From' => 'LocalHost',
    'Reply-To' => 'Localhost',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($catre, $subiect, $mesaj, $antet);
     }
     else{
         echo "Datele nu au putu fi adăugate." . mysqli_error($link);
     }

    }
    else
    {
        echo"<h2>Emailul nu este identic, te rog sa verifici corectitudinea datelor </h2>";
    }
   
    mysqli_close($link);
}
?>