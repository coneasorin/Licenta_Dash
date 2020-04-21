<?php
if (isset($_POST['update_persoane_infectate'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $persoane_infectate_form = mysqli_real_escape_string($link, $_REQUEST['infectate']);
    $sql2 = "SELECT p_infectate from statistici";
      $result = mysqli_query($link, $sql2);

      while($row = mysqli_fetch_assoc($result)) {
            $pers_infectate_db=$row['p_infectate'];  
                              }

     $aux=$pers_infectate_db+$persoane_infectate_form;
       $sql= "UPDATE statistici SET p_infectate=$aux";
    if(mysqli_query($link, $sql)){
        echo "Datele au fost actualizate cu succes";
    } else{
        echo "NU AM PUTUT ADAUGA DATELE ! " . mysqli_error($link);
    }

    mysqli_close($link);
}
?> 