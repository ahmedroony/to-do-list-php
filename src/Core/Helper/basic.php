<?php
function path($path = '')
{
    $path = $path[0] != '/' ? "/$path" : "$path";
     return __DIR__."/../..".$path;
}
function url($path ='')
{
    $path = $path[0] != '/' ? "/$path" : "$path";
    $schema = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $domain = $_SERVER['HTTP_HOST'];
    return $schema . '://' . $domain . $path;
}
function redirect($url){
    header('location: ' . url($url));
    die();
}

