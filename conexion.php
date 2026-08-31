<?php

    function conexion(){

    $host = "host=dpg-da7fkduk1f9s73d8vikg-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_db_3m0g";
    $user = "user=test_db_3m0g_user";
    $password = "password=0MOcF3uw6G4CFs2IVVR9YDpH3zGh9tkM";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>
