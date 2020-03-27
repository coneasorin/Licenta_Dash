<?php
if (isset($_POST['adauga_analize'])) {
    $link = mysqli_connect("localhost", "root", "", "licenta");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $CNP = mysqli_real_escape_string($link, $_REQUEST['CNP']);
    $wbc = mysqli_real_escape_string($link, $_REQUEST['wbc']);
    $lym = mysqli_real_escape_string($link, $_REQUEST['lym']);
    $mon = mysqli_real_escape_string($link, $_REQUEST['mon']);
    $gra = mysqli_real_escape_string($link, $_REQUEST['gra']);
     $hgb = mysqli_real_escape_string($link, $_REQUEST['hgb']);
      $plt = mysqli_real_escape_string($link, $_REQUEST['plt']);

    $sql = "INSERT INTO analize (CNP, WBC, LYM, GRA, HgB, Plt) 
        VALUES ('$CNP', '$wbc', '$lym', '$gra', '$hgb', '$plt')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?> 