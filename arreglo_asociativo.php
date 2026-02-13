<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos Asociativos</title>
</head>
<body>
    /* 
    A DIFERENCIA DE LOS ARRAY COMUNES EN DONDE SE ACCEDE A LOS ELEMENTOS POR POSICIONES
    LOS ARREGLOS ASOCIATIVOS SE ACCEDEN POR UNA CLAVE DESCRIPTIVA
*/    
    <?php 
        $books = [
            [ 
                'name'        => 'Do Androids Dreams of Electric Seep',
                'author'      => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name'        => 'Project Hail Mary',
                'author'      => 'Andy Weir',
                'purchaseUrl' => 'http://example.com',
            ]
        ];
    ?>
    <ul>
        <?php foreach($books as $book) : ?>
        <li><?= $book['name']?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>