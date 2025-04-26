<?php
    include ('../../config/db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];

        $encryt = password_hash($contrasenia, PASSWORD_BCRYPT);

        $query = "INSERT INTO usuarios (usuario, nombre, correo, contrasenia) VALUES ('$usuario','$nombre','$correo', '$encryt')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        echo "Usuario registrado.";
    }
