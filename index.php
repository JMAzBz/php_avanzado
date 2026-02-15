<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Anonimas</title>
</head>

<body>
    <?php
    ### HE REFACTORIZADO MI FUNCIONA PARA QUE AHORA SE MÁS GENERICO A LA HORA DE FILTRAR DATOS A
    ### TRAVES DE FUNCIONES ANONIMAS
    $books = [
        [
            'name' => 'Do Androids Dreams of Electric Sheep',
            'author' => 'Philip k. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
    ];

    function filter($items, $fn)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    $filterBooks = filter($books, function($book){
        return $book['releaseYear'] < 3000;
    });
    ?>
    <ul>
        <?php foreach ($filterBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>