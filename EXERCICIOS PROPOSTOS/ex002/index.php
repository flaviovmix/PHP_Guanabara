<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ex000</title>
</head>
<body>
    <h1>
        Exemplo de data
    </h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Agora é " . date("d/m/y") . " às " . date("G:i:s"); 
        ?>
</body>
</html>