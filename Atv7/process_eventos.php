<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $eventos = $_POST['eventos'];
        
        switch ($eventos) {
            case 'evento1':
                echo"<h1>Boas vindas ao evento " . "<u>". "Celebração da Lua Prateada" . "</u>" . "</h1>";
                break;
            case 'evento2':
                echo"<h1>Boas vindas ao evento " . "<u>". "Corrida das Estrelas" . "</u>" . "</h1>";
                break;
            case 'evento3':
                echo"<h1>Boas vindas ao evento " . "<u>". "Busca pelo Santo Graal" . "</u>" . "</h1>";
                break;
            case 'evento4':
                echo"<h1>Boas vindas ao evento " . "<u>". "A Busca pelo Cálice da Imortalidade" . "</u>" . "</h1>";
                break;
        }
        echo "<p>Nome = $nome</p>";
        echo "<p>Email = $email</p>";
    } else {
        echo "<h1>Evento não cadastrado</h1>";
    }
?>