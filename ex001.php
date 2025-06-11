<html>
<head>
    <title>Exemplo com PHP</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Dia e Noite</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $hoje = date("d/m/Y");
        $agora = date("H:i");
        $hora = date("H"); // Pega a hora em formato de 24 horas (00-23)

        // Lógica para exibir a imagem (sol ou lua)
        if ($hora < 6 or $hora > 18){
            echo "<img src='lua.png'>";
        }else{
            echo "<img src='sol.png'>";
        }

        // Lógica para exibir a mensagem de saudação
        $saudacao = "";
        if ($hora >= 4 && $hora <= 12) {
            $saudacao = "Bom dia";
        } elseif ($hora >= 13 && $hora <= 18) {
            $saudacao = "Boa tarde";
        } else {
            $saudacao = "Boa noite";
        }

        echo "<p>" . $saudacao . ", hoje é dia " . $hoje . " e agora são " . $agora . " horas.</p>";
    ?>
</body>
</html>