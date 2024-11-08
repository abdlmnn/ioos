<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'testing';

    $mysql = new mysqli($hostname,$username,$password,$database);

    $resultMysql = $mysqli->connect_error;

    if ($resultMysql)
    {
        die('Connection failed: ' . $mysql->connect_error);
    }
    // else
    // {
    //     echo "Connection successfully";
    // }
?>  