<?php
    include('../../config/db.php');
    $query = "SELECT * FROM clientes";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed: ".mysqli_error($conn));
    }
    echo json_encode(
        $result->fetch_assoc()
    );
