<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Contato (POST)</h1>
    <form action="process_mensagem.php" method="post">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <br>
        <br>

        <textarea name="mensagem" id="mensagem"></textarea>
        
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>