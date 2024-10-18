<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir e Listar Usuários</title>
</head>
<body>
    <h1>Insira seus dados</h1>
    <form action="insert.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Usuários Cadastrados</h2>
    <form method="POST" action="index.php">
        <input type="submit" name="ver_usuarios" value="Ver Usuários">
    </form>

   
        <!-- Exibir os dados do SELECT aqui -->
        <?php
        if (isset($_POST['ver_usuarios'])) {
            include 'select.php';
        }
        ?>
    </table>
</body>
</html>