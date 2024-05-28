<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Pesquisa</title>
</head>
<body>
    <h1>Formulário de Pesquisa (GET)</h1>
    <form action="process_pesquisa.php" method="get">
        <label for="termo">Termo de Pesquisa:</label>
        <input type="text" id="termo" name="termo" required><br><br>
        
        <input type="submit" value="Pesquisar">
    </form>
</body>
</html>