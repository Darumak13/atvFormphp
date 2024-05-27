<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $numero_1 = htmlspecialchars($_POST["numero_1"]);
        $numero_2 = htmlspecialchars($_POST["numero_2"]);
        $calculo = htmlspecialchars($_POST["calculo"]);

        if($calculo == "soma"){
            $resul = 0;
            echo"<h1>Soma dos valores</h1>";
            $resul = $numero_1 + $numero_2;
            echo"<p> ".$numero_1." + ".$numero_2." = " .$resul." </p>";
        } elseif($calculo == "subtracao"){
            $resul = 0;
            echo "<h1>Subtração dos valores</h1>";
            $resul = $numero_1 - $numero_2;
            echo"<p> ".$numero_1." - ".$numero_2." = " .$resul." </p>";
        } elseif($calculo == "divisao"){
            $resul = 0;
            echo "<h1>Divisão dos valores</h1>";
            $resul = $numero_1 / $numero_2;
            echo"<p> ".$numero_1." / ".$numero_2." = " .$resul." </p>";
        } else {
            $resul = 0;
            echo "<h1>Multiplicação dos valores</h1>";
            $resul = $numero_1 * $numero_2;
            echo"<p> ".$numero_1." * ".$numero_2." = " .$resul." </p>";
        }
    }
?>