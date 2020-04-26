<?php
 $link = mysqli_connect("localhost", "root", "", "licenta");
if (isset($_POST['actualizeaza_date'])) {
    
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}
    session_start();
   $CNP=$_SESSION['CNP'];
    $update_inaltime = mysqli_real_escape_string($link, $_REQUEST['update_inaltime']);
    $update_greutate = mysqli_real_escape_string($link, $_REQUEST['update_greutate']);
    $update_tel = mysqli_real_escape_string($link, $_REQUEST['update_tel']);
    $update_email = mysqli_real_escape_string($link, $_REQUEST['update_email']);
    $parola_veche = mysqli_real_escape_string($link, $_REQUEST['parola_veche']);
    $parola_noua = mysqli_real_escape_string($link, $_REQUEST['parola_noua']);
        $sql = "SELECT * from pacienti WHERE CNP = '$CNP'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)) {
            $inaltime_db=$row['Inaltime'];  
             $greutate_db=$row['Greutate']; 
              $tel_db=$row['Numar_telefon']; 
               $email_db=$row['Email']; 
               $parola_db=$row['Parola'];
                                                }
                       
    if ( ($update_inaltime)&&($update_inaltime > 70 ) &&($update_inaltime < 220 ) )
    {
        $sql = "UPDATE pacienti SET Inaltime = '$update_inaltime' WHERE CNP= '$CNP'";
        if(mysqli_query($link, $sql)){
         echo "Înălțimea a fost modificată";}
    }
    if ( ($update_greutate)&&($update_greutate > 1 ) &&($update_greutate < 200 ) )
    {
        $sql2 = "UPDATE pacienti SET Greutate = '$update_greutate' WHERE CNP= '$CNP'";
        if(mysqli_query($link, $sql2)){
         echo "Greutatea a fost modificată";}
    }
    if (isset ($update_tel) && strlen($update_tel)==10)
    {
        $sql3 = "UPDATE pacienti SET Numar_telefon = '$update_tel' WHERE CNP= '$CNP'";
        if(mysqli_query($link, $sql3)){
         echo "Numărul de telefon a fost actualizat";}
    }
    if($update_email)
    {
        $sql4 = "UPDATE pacienti SET Email = '$update_email' WHERE CNP= '$CNP'";
        if(mysqli_query($link, $sql4)){
         echo "Emailul a fost actualizat.";}
    }
    if (strcmp($parola_veche, $parola_db  ) == 0) {
                        $sql5 = "UPDATE pacienti SET Parola = '$parola_noua' WHERE CNP= '$CNP'";
        if(mysqli_query($link, $sql5)){
         echo "Parola dvs a fost actualizata.";}
                                                 }
     
    mysqli_close($link);

?>