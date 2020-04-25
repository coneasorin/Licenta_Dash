<?php
 $link = mysqli_connect("localhost", "root", "", "licenta");

if (isset($_POST['programari_date'])) {

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    } }     
          $alegere = $_POST['ID2'];
         $sql = "SELECT Numele,Prenumele from medici WHERE ID=$alegere";
      $result = mysqli_query($link, $sql);

      while($row = mysqli_fetch_assoc($result)) {
            $numele=$row['Numele'];
            $prenumele=$row['Prenumele'];
                              }
     echo'Ai ales medicul cu ID:'.$alegere." ".$numele." ".$prenumele;
             mysqli_close($link);
?>