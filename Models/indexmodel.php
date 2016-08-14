<?php

/**
 * Created by PhpStorm.
 * User: mahbub-shohag
 * Date: 7/8/2016
 * Time: 6:01 AM
 */
namespace APP;
class indexmodel
{

    public function indexmodel()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $db = new PDO("mysql:host=$servername;dbname=wwwuddin_db", $username, $password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "success";
        } catch
        (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }



}