<?php

namespace App\Model\Db;

/**
 * Une factory permet créer des objets
 * c'est aussi un design pattern
 */

final class DbFactory
{
    /**
     *Fabrique et retourne une instance de PDO
     */
    public static function createPDO() : \PDO
    {
        $db = new \PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME, DB_USER, DB_PASSWORD);
        //$db = new PDO('mysql:host=localhost;dbname=actunews', 'root', 'root'); // pour mac
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return  $db;
    }
}