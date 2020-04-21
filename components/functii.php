<?php
        function persoane_infectate()
        {
             $mysqli = new mysqli("localhost", 'root', '', 'licenta');
          	 $sql3 = "SELECT p_infectate from statistici";
     		 $result3 = mysqli_query($mysqli, $sql3);

      while($row3 = mysqli_fetch_assoc($result3)) {
            $pers_infectate=$row3['p_infectate'];  
                              }
        }



?>