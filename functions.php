<?php
// echo $_SERVER['REQUEST_URI'];

function dd($value){
echo "<pre>";
var_dump($value) ;
echo "</pre>";
die();
};
// dd($_SERVER);

function urlIs($url){
    return $_SERVER['REQUEST_URI'] === $url;
}