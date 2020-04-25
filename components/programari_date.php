<?php
$link = mysqli_connect("localhost", "root", "", "licenta");

if (isset($_POST['programari_date'])) {
    session_start();
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}
$CNP = $_SESSION['CNP'];
$alegere = $_POST['ID2'];
$ora = $_POST['ora'];
$data = $_POST['data'];
$sql = "SELECT * from medici WHERE ID='$alegere'";
$sql2 = "SELECT * from programari WHERE ID_Medic='$alegere'";
$result = mysqli_query($link, $sql);
$result2 = mysqli_query($link, $sql2);
$ora_db = -1;
$data_db = -1;
while ($row = mysqli_fetch_assoc($result)) {
    $numele = $row['Numele'];
    $prenumele = $row['Prenumele'];
    $email = $row['Email'];
}
while ($row2 = mysqli_fetch_assoc($result2)) {
    $ora_db = $row2['Ora'];
    $data_db = $row2['Data'];
}
if (($ora_db == $ora) && ($data_db == $data)) {
    echo "Te rog sa alegi o alta ora, din pacate cineva a facut o programare inaintea ta";
} else {
    $sql = "INSERT INTO programari (ID_Medic, Ora, Data,CNP_PACIENT) 
       VALUES ('$alegere', '$ora','$data','$CNP')";
    $catre = $email;
    $subiect = 'Aveți o programare de pe site ';
    $mesaj = "Ora: " . $ora . "  Data: " . $data;
    $antet = array(
        'From' => 'LocalHost',
        'Reply-To' => 'Localhost',
        'X-Mailer' => 'PHP/' . phpversion()
    );

    mail($catre, $subiect, $mesaj, $antet);
    if (mysqli_query($link, $sql)) {
        echo "Programarea a fost făcută. Te rugăm să te prezinți la timp!";
    } else {
        echo "Am întâmpinat o eroare, te rugăm sa faci o programare telefonică.";
    }

}
// echo'Ai ales medicul cu ID:'.$alegere." ".$numele." ".$prenumele;
// echo '    Ora: '.$ora.'    Data:'.$data;
mysqli_close($link);
?>`