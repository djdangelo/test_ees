<?php
include ('../../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) < 0) {
        die('no hay datos para este usuario.' . mysqli_error($conn));
    }
    if (password_verify($password, $result->fetch_assoc()['contrasenia'])) {
        echo 'Bienvenido al sistema';
    } else {
        echo 'Contrasenia o email no valido';
    }
}