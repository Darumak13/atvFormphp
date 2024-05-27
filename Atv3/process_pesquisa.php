<?php 
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $termo = htmlspecialchars($_GET["termo"]);  
        echo "<h1>Resultado da Pesquisa</h1>";
        echo "<p>Você pesquisou pelo termo: $termo</p>";
    } else {
        echo "<h1>Acesso Inválido</h1>";
        echo "<p>Por favor, envie o formulário corretamente.</p>";
    }
?>