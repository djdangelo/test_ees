<?php

include ('../../config/db.php');
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $query = "SELECT * FROM clientes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed: ".mysqli_error($conn));
    }
    echo json_encode(
        $result->fetch_assoc()
    );
}