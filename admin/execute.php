<?php
    include 'connection.php';

    function execute($sql){
        global $mysql;

        $query = $mysql->query($sql);
        
        if(!$query){
            die('Error: '.$mysql->error);
        }

        return $query;
    }
?>