<?php

$config = require('config.php');

$db = new DateBase($config);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
        $db->query("INSERT INTO notes(body,user_fk) VALUES (:body,:user_fk)",
    ['body' => $_POST['body'],'user_fk' => 1]);
}

require 'view/note_create.view.php';
