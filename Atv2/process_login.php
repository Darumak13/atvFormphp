<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $senha = htmlspecialchars($_POST['senha']);
        if ($nome == 'admin' && $senha == 1234) {
            echo"<h1>Sucesso</h1>";
            echo"<p> Nome=$nome </p>";
            echo"<p> Senha=$senha </p>";
        } else {
            echo "<h1>Erro</h1>";
    }
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}
?>