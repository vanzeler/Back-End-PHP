<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
$id_texto = $_POST["id-texto"];
$titulo_texto = $_POST["titulo-texto"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($id_texto != null && $titulo_texto == null) {
    $sql = "DELETE FROM categorias WHERE id=($id_texto)";
    if ($conn->query($sql) === TRUE) {
        echo "Ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($id_texto == null && $titulo_texto != null) {
    $sql = "DELETE FROM categorias WHERE titulo='$titulo_texto'";
    if ($conn->query($sql) === TRUE) {
        echo "Ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
header('Location:excluir.php');
exit;
