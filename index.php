<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        /*  ## DIFERENCIA DE LAS COMILLAS "" Y '' ##
            PARA ANIDAR Y EVALUAR UNA VARIABLE DENTRO DE UNA CADENA SE USA ""
            PARA IMPRIMIR SOLO CADENAS DE CARACTERES ES RECOMENDABLE USAR ''
        */
        $greeting = "Hello";

        echo $greeting.' '. 'Everybody';

        echo "<p> $greeting Everybody </p>";
    ?>
</body>
</html>