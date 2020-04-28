<?php
if (isset($_POST['adauga_analize'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("Eroare la conectarea la baza de date " . mysqli_connect_error());
    }

    $CNP = mysqli_real_escape_string($link, $_REQUEST['CNP']);
    $wbc = mysqli_real_escape_string($link, $_REQUEST['wbc']);
    $lym = mysqli_real_escape_string($link, $_REQUEST['lym']);
    $mon = mysqli_real_escape_string($link, $_REQUEST['mon']);
    $gra = mysqli_real_escape_string($link, $_REQUEST['gra']);
     $hgb = mysqli_real_escape_string($link, $_REQUEST['hgb']);
      $plt = mysqli_real_escape_string($link, $_REQUEST['plt']);
       $data = mysqli_real_escape_string($link, $_REQUEST['data']);
        $sql = "SELECT CNP from pacienti";
      $result = mysqli_query($link, $sql);

      while($row = mysqli_fetch_assoc($result)) {
            $cnp_pacient=$row['CNP'];
            if($cnp_pacient==$CNP)
            {
	if(strlen($CNP)==13)
       	{
   $sql = "INSERT INTO analize (CNP, WBC, LYM, GRA, HgB, Plt, data) 
        VALUES ('$CNP', '$wbc', '$lym', '$gra', '$hgb', '$plt', '$data')";
       		}
    if(mysqli_query($link, $sql)){
        echo "Datele au fost adaugate cu succes.";
    } else{
        echo "NU am putut adauga datele. " . mysqli_error($link);
    }

            }  
                              }
       



    mysqli_close($link);
}
?> 