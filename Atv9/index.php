<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1> Quiz Teste </h1>
    <form action="process_quiz.php" method="post">
        <label for="questions">Selecione a opção correta</label>
        <p>Quanto que é ? 2 + 2 * (5 / 2)</p>
        <select name="questions" id="questions" required>
            <option value="resposta1">2</option>
            <option value="resposta2">6</option>
            <option value="resposta3">7</option>
            <option value="resposta4">10</option>
        </select>
        <br>
        <p>Quanto que da o calculo da variação de 🔼 = b ^ 2 - 4ac</p>
        
        <p>Sendo b = 4 ; a = 1 e c = 2 </p>
        <select name="questions2" id="questions2" required>
            <option value="resposta5">5</option>
            <option value="resposta6">0</option>
            <option value="resposta7">8</option>
            <option value="resposta8">2</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>