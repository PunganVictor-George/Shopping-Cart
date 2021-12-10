<?php

     $user = "root";
     $host = "127.0.0.1:8889";
     $pass = "root";
     $db = "magazin2";
        global $con;
      $con = mysqli_connect($host, $user, $pass, $db);

    if ($con->connect_error) {

          die('Failed to connect to MySQL: ' . $con->connect_error) ;
    }



    ?>






