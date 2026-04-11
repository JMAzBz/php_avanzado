<?php
$heading = "My Note";

$config = require 'config.php';

$db = new DateBase($config);

$id = $_GET['id'];

$user_fk = 2;
$note = $db->query("SELECT * FROM notes WHERE id = :id",
['id' => $id])->findOrFail();

###### ESTA PORCION DE CODIGO YA LO REFACTORIZE EN DATABASE findOrFail
// if(!$note)
// // SI NO ENCUENTRA NOTAS CON ESAS CARACTERISTICAS
// {
//     abort(Response::NOT_FOUND);
// }
###### ESTA PORCION DE CODIGO YA LO REFACTORIZE EN FUNCTION
// // SI LA NOTA NO CORRESPONDE AL USUARIO
// if($note['user_fk'] !== $user_fk){
//     abort(Response::FORBIDDEN);
// };

authorize($note['user_fk'] !== $user_fk);

require 'view/note.view.php';
