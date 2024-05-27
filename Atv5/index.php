<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form action="process_calculadora.php" method="post">
        <label for="number">Número 1</label>
        <input type="number" id="numero" name="numero_1" required>

        <br>
        <br>

        <select id="calc" name="calculo">
            <option name="soma" value="soma">+</option>
            <option name="subtracao" value="subtracao">-</option>
            <option name="divisao" value="divisao">/</option>
            <option name="multiplicacao" value="multiplicacao">*</option>
        </select>

        <br>
        <br>

        <label for="number">Número 2</label>
        <input type="number" id="numero" name="numero_2" required>

        <br>
        <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>