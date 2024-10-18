<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "meu_banco";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Executar o SELECT para obter os dados da tabela usuarios
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

// Verifique se há registros
if ($result->num_rows > 0) {
    // Exibir os dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nenhum usuário cadastrado</td></tr>";
}

// Fechar conexão
$conn->close();
?>