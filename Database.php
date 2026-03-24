<?php
######## PRIMERA VERSION DE CONEXION DE DB
// $dsn  = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
// $user = "root";
// $pass = "123456789";

// $pdo = new PDO($dsn,$user,$pass);

// $statement = $pdo->prepare("select * FROM post");
// $statement->execute();
// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($posts as $post)
// {
//     echo "<li>". $post['text']."</li>";
// }

######## SEGUNDA VERSION DE CONEXION DE BASE DE DATOS 
class DateBase 
{
    public $connection;
######## HE DECIDIDO CREAR UNA FUNCION CONSTRUCTURA PARA NO EJACUTAR VARIAS VECES A LA CONEXION
    public function __construct()
    {
        $dsn  = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
        $user = "root";
        $pass = "123456789";

        $this->connection = new PDO($dsn,$user,$pass);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}