<?php
    include('../../config/db.php');

    if(isset($_GET['client_id'])){
        $id = $_GET['client_id'];
        $query = "SELECT * FROM clientes WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed". mysqli_error($conn));
        }
    }

    if(isset($_PUT['update_client'])){
        $id = $_GET['client_id'];
        $nombre = $_PUT['nombre'];
        $apellido = $_PUT['apellido'];
        $email = $_PUT['email'];
        $telefono = $_PUT['telefono'];
        $pais_id = $_PUT['pais_id'];

        $query = "UPDATE clientes SET nombre = '$nombre', apellido='$apellido', email='$email', telefono='$telefono', pais_id = '$pais_id' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed". mysqli_error($conn));
        }
        echo 'Cliente actualizado.';
    }
