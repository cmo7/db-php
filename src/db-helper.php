<?php
namespace DatabaseHelper;

function db_connect() {
    $connection_string = "host=" . "db"
                       . " port=" . "5432"
                       . " dbname=" . "postgres"
                       . " user=" . "postgres" 
                       . " password=" . "postgres";
    $connection = pg_connect($connection_string) or die("No se pudo conectar a la base de datos");
    return $connection;
}

function db_query($connection, $query) {
    $result = pg_query($connection, $query) or die("No se pudo ejecutar la consulta");
    return $result;
}

function db_clear($connection, $result) {
    pg_free_result($result);
    pg_close($connection);
}
