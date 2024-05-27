<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $mesagem = htmlspecialchars($_POST["mensagem"]);
        
        echo"<h1>Mensagem Enviada</h1>";
        echo "<p>Nome = $nome</p>";
        echo "<p>Email = $email</p>";
        echo "<p>Mensagem = $mesagem</p>";
    } else {
        echo "<h1>Mensagem não enviada</h1>";
    }
?>