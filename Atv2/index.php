<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Formulário de login (POST)</h1>
    <form action="process_login.php" method="post">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="nome" required>
        
        <br>
        <br>

        <label for="password">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>