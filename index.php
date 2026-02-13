<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
        ### HE DEFINIDO UN CÓDIGO FUNCIONAL Y BIEN ESTRUCTURADO PARA EMPEZAR
        $books =[
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

        function filterByAuthor($books, $author){
            $filteredBooks = [];
            foreach ($books as $book){
                if($book['author'] === $author){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>
    <ul>
        <?php foreach(filterByAuthor($books, 'Andy Weir') as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?=  $book['name'] ?> (<?= $book['releaseYear'] ?>)
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>