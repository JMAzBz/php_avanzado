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
    public $statement;
######## HE DECIDIDO CREAR UNA FUNCION CONSTRUCTURA PARA NO EJACUTAR VARIAS VECES A LA CONEXION
    // public function __construct()
    // {
    //     $dsn  = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
    //     $user = "root";
    //     $pass = "123456789";

    //     $this->connection = new PDO($dsn,$user,$pass);
    // }
#######  SEGUNDA VERSION DEL CONSTRUCTOR 
    public function __construct($config,$user = "root", $pass = "123456789")
    {
        $dsn = 'mysql:'.http_build_query($config,'',';');

        $this->connection = new PDO($dsn,$user,$pass,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $param = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }
}