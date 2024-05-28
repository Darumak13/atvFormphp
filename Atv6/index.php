<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <h1>Feedback de Produtos:</h1>
    <form action="process_feedback.php" method="post">
        <select id="product" name="produto">
            <option value="Adidas">Adidas</option>
            <option value="Nike">Nike</option>
            <option value="Jordan">Jordan</option>
            <option value="Fila">Fila</option>
        </select>
        <select name="estrelas" id="rating">
            <option value="1">1 estrela</option>
            <option value="2">2 estrela</option>
            <option value="3">3 estrela</option>
            <option value="4">4 estrela</option>
            <option value="5">5 estrela</option>
        </select>
        <br>
        <textarea name="mensagem" id="mensagem"></textarea>
        <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>
</html>