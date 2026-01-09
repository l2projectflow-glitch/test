<?php
    $serverName = DATABASE_SITE['host'];
    $connectionOptions = array(
        "Database" => DATABASE_SITE['dbname'],
        "Uid" => DATABASE_SITE['user'],
        "PWD" => DATABASE_SITE['pass']
    );

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false) {
        error_log("Erro ao conectar ao banco de dados: " . print_r(sqlsrv_errors(), true));
        die("Erro ao conectar ao banco de dados.");
    }
?>
