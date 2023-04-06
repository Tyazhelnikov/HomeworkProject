<?php
//include 'Twig/Autoloader.php';
//Twig_Autoloader::register();
require './vendor/autoload.php';
// подключение к бд
try {
  $dbh = new PDO('mysql:dbname=world;host=localhost', 'root', '123456789');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// установка error режима
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// выполняем запрос
try {
  // формируем SELECT запрос
  // в результате каждая строка таблицы будет объектом
  $sql = "SELECT country.Code AS code, country.Name AS name, country.Region AS region, country.Population AS population,
       countrylanguage.Language AS language, city.Name AS capital FROM country, city, countrylanguage WHERE 
       country.Code = city.CountryCode AND country.Capital = city.ID AND country.Code = countrylanguage.CountryCode AND 
       countrylanguage.IsOfficial = 'T' ORDER BY population DESC LIMIT 0,20";
  $sth = $dbh->query($sql);
    //var_dump($sth);
    while ($row = $sth->fetchObject()) {
    $data[] = $row;
  }
  
  // закрываем соединение
  unset($dbh);

 /* $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);*/
    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader,[
        'debug' => true,
        // ...
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());
  //$template = $twig->load('countries2.tmpl');

    echo $twig->render('testView.twig',array (
    'data' => $data
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>