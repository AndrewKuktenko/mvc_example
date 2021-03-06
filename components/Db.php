<?php

/**
 * Created by PhpStorm.
 * User: Andrew Kuktenko
 * Date: 12.07.2017
 * Time: 0:36
 */
class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}