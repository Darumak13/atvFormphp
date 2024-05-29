<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $filme = $_POST["filme"];

        $_SESSION["resultado"][$filme] += 1;

        echo"Você votou no filme: $filme";

        echo"<br><br>Resultado atuais:<br>";
        foreach ($_SESSION["resultado"] as $filme => $votos) {
            echo "$filme: $votos votos<br>";
        }
    } else {
        echo"Votação não cadastrada";
    }
?>