<?php
$heading = "My Note";

$config = require 'config.php';

$db = new DateBase($config);

$id = $_GET['id'];

$user_fk = 2;
$note = $db->query("SELECT * FROM notes WHERE id = :id",
['id' => $id])->fetch();

if(!$note)
// SI NO ENCUENTRA NOTAS CON ESAS CARACTERISTICAS
{
    abort(404);
}
// SI LA NOTA NO CORRESPONDE AL USUARIO
if($note['user_fk'] !== $user_fk){
    abort(403);
}

require 'view/note.view.php';
