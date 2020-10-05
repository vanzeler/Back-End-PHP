
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
$texto = $_POST["Titulo-texto"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO categorias (titulo)
          VALUES ('$texto')";
if ($conn->query($sql) === TRUE) {
    echo "Ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location: cadastrar.php');
exit;

?>

