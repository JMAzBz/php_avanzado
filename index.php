<?php

require 'functions.php';

// require 'router.php';



$db = new DateBase();
$posts = $db->query("select * FROM post")->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post)
{
    echo "<li>". $post['text']."</li>";
}