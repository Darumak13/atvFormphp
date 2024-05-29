<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>
    <h1 style="text-align:center;"> Registro de Eventos:</h1>
    <div style="text-align: center;">
    <form action="process_eventos.php" method="post">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <br>
        <br>
        
        <label for="eventos">Selecione o evento</label>
        <select name="eventos" id="eventos">
            <option value="evento1">Celebração da Lua Prateada</option>
            <option value="evento2">Corrida das Estrelas</option>
            <option value="evento3">Busca pelo Santo Graal</option>
            <option value="evento4">A Busca pelo Cálice da Imortalidade</option>
        </select>
        <br>
        <input type="submit" value="Cadastrar">
        </div>
    </form>
</body>
</html>