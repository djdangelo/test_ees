<?php
    include ('../../config/db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $pais_id = $_POST['pais_id'];

        $query = "INSERT INTO clientes (nombre, apellido, email, telefono, pais_id) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$pais_id')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        echo 'Cliente registrado';
    }