<?php
$heading = "Notes";

$config = require 'config.php';

$db = new DateBase($config);

$user_fk = 1;
$notes = $db->query("SELECT * FROM notes WHERE user_fk = :user_fk",['user_fk' => $user_fk])->fetchAll();

require 'view/notes.view.php';
