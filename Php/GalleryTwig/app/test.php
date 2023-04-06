<?php
require '../vendor/autoload.php';
//use App\View\Link;

$file = 'settings/dbsettings.ini';
//$settings = parse_ini_file($file);
//var_dump($settings['dsn']);

$link = new \App\View\Link($file);
/*$result =  $link->query("SELECT * FROM geek_project.gallery;");
//var_dump($link->query("SELECT * FROM geek_project.gallery;"));
//$data = [];
while ($row = $result->fetchObject()) {
    $data[] = $row;
}*/
$query = "SELECT * FROM geek_project.gallery;";
$data = $link->getData($query);
//var_dump($data);
/*$link = null;
$data = null;*/

