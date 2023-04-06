<?php

namespace app\view;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use mysql_xdevapi\Exception;

class Link extends \PDO
{
    private array $data;
    // connection to db class
    public function __construct(string $file)
    {
        if (!($settings = parse_ini_file($file))) throw new Exception('File is not found' .$file );
        $dsn = $settings['dsn'];
        $username = $settings['username'];
        $password = $settings['password'];
        $options = null;
        parent::__construct($dsn, $username, $password, $options);

    }

    public function getData(string $query): array {
        $sth = self::query($query);
        /*foreach ($sth as $row){
            $this->data[] = $row;
        }*/
        while ($row = $sth->fetch()){
            $this->data[] = $row;
        }

       /* while ( $row = parent::query($query)->fetchObject()){
            $this->data[] = $row;
        }*/
        //unset()
        $sth = null;
        return $this->data;

        //die();
    }

}