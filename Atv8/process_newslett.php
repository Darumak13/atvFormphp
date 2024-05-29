<?php 

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $email = htmlspecialchars($_POST["email"]);
        
        echo"<h1><center>BEM VINDO AO NOSSO NEWSLETTER</center></h1>";
        echo"<h3><center>Esperamos que você se divirta com a nossa variadade de informações</center></h3>";
        echo "<center>4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣4️⃣2️⃣</center>";
    } else {
        echo "<center>Ops parece que ocorreu um erro tente reenviar seu email novamente</center>";
    }
?>