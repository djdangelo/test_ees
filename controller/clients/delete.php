<?php
    include('../../config/db.php');

    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        $id = $_GET['client_id'];
        $query = "DELETE FROM clientes WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed: ".mysqli_error($conn));
        }
        echo 'Cliente eliminado.';
    }