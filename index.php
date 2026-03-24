<?php

require 'functions.php';
require 'Database.php';
$config = require 'config.php';
// require 'router.php';

$db = new DateBase($config);
$posts = $db->query("select * FROM post")->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post)
{
    echo "<li>". $post['text']."</li>";
}