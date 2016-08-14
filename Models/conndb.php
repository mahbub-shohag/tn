<?php

/**
 * Created by PhpStorm.
 * User: mahbub-shohag
 * Date: 6/4/2016
 * Time: 6:25 PM
 */
namespace APP;
class conndb
{
    public function conndb()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $db = new PDO("mysql:host=$servername;dbname=wwwuddin_db", $username, $password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch
        (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}