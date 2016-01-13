<?php

     $now = time(); //i twrini mera
     $your_date = strtotime("2014-01-01");
     $datediff = $now - $your_date;
     echo floor($datediff/(60*60*24));

?>