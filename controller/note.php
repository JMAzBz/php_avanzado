<?php
$heading = "My Note";

$config = require 'config.php';

$db = new DateBase($config);

$id = $_GET['id'];

$user_fk = 1;
$note = $db->query("SELECT * FROM notes WHERE id = :id",['id' => $id])->fetch();

require 'view/note.view.php';
