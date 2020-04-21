<?php
if (isset($_POST['update_persoane_decedate'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $persoane_decedate_form = mysqli_real_escape_string($link, $_REQUEST['decedate']);
    $sql2 = "SELECT p_decedate from statistici";
      $result = mysqli_query($link, $sql2);

      while($row = mysqli_fetch_assoc($result)) {
            $pers_decedate_db=$row['p_decedate'];  
                              }

     $aux=$pers_decedate_db+$persoane_decedate_form;
       $sql= "UPDATE statistici SET p_decedate=$aux";
    if(mysqli_query($link, $sql)){
        echo "Datele au fost actualizate cu succes";
    } else{
        echo "NU AM PUTUT ADAUGA DATELE ! " . mysqli_error($link);
    }

    mysqli_close($link);
}
?> 