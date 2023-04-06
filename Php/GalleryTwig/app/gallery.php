<?php
require '../vendor/autoload.php';
use App\View\Page ;
use App\View\Link;

/*function update(){
    $updateQuery = "UPDATE `geek_project`.`gallery` SET `views` = `views` + 1 WHERE (`id` = {$id});";
    execute($updateQuery);
}*/
$file = 'settings/dbsettings.ini';

$link = new Link($file);
$query = 'select * from geek_project.gallery order by views desc';


$data = $link->getData($query);
//var_dump($result);

$page = new  Page('gallery');
echo $page->render(['data' => $data]);
