<?php
if (isset($_POST['update_persoane_vindecate'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $persoane_vindecate_form = mysqli_real_escape_string($link, $_REQUEST['vindecate']);
    $sql2 = "SELECT p_vindecate from statistici";
      $result = mysqli_query($link, $sql2);

      while($row = mysqli_fetch_assoc($result)) {
            $pers_vindecate_db=$row['p_vindecate'];  
                              }

     $aux=$pers_vindecate_db+$persoane_vindecate_form;
       $sql= "UPDATE statistici SET p_vindecate=$aux";
    if(mysqli_query($link, $sql)){
        echo "Datele au fost actualizate cu succes";
    } else{
        echo "NU AM PUTUT ADAUGA DATELE ! " . mysqli_error($link);
    }

    mysqli_close($link);
}
?> 