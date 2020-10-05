<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>



<body>
    <div>
        <?php
        include("conexao.php");
        $con = new Conexao;
        $con->conn("");
        ?>
    </div>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
        <h3 class="w3-bar-item">Funções </h3>
        <a href="cadastrar.php" class="w3-bar-item w3-button">Cadastrar</a>
        <a href="buscar.php" class="w3-bar-item w3-button">Buscar</a>
        <a href="alterar.php" class="w3-bar-item w3-button">Alterar</a>
        <a href="excluir.php" class="w3-bar-item w3-button">Excluir</a>
    </div>
    <div style="margin-left:25%">
        <div class="w3-container w3-teal">
            <h1>CRUD</h1>
        </div>

        <div class="w3-container">
            <form action="update.php" method="post">
                <div class="form-group">
                    <div class="conteiner">
                        <label for="Titulo">Valor</label>
                        <div class="row">
                            <div class="md-3 d-flex p-2"><input type="text" name="id-texto" class="form-control" id="Titulo" placeholder="Id"></div>
                            <div class="md-3 d-flex p-2"><input type="text" name="titulo-texto" class="form-control" id="Titulo" placeholder="Titulo"></div>
                            <div class="md-3 d-flex p-2"><input type="submit" name="Titulo-Botao" class="btn btn-primary"></div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="busca-banco">Busca do banco</label>
                </div>
                <div class="form-group form-check">
                </div>

            </form>
        </div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mysql";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM categorias";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Produtos</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titulo"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
        <div id="footer"></div>
    </div>



</body>

</html>