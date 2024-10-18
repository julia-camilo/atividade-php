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

// Pegar os dados enviados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();

// Redirecionar de volta para o formulário após a inserção
header("Location: index.php");
exit();
?>