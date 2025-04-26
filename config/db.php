<?php
    $conn = mysqli_connect("localhost", "root", "", "prueba");
    if(mysqli_connect_errno()){
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }