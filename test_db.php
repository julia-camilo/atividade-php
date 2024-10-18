<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "meu_banco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Nenhum dado encontrado";
}

$conn->close();
?>