<?php
require_once 'enviroment.php';
if (ENVIROMENT == 'development') {
    define("BASE_URL", "http://localhost/pesquisas/");
    $config = [
        'dbname' => 'pesquisas',
        'host' => '192.168.0.14',
        'dbuser' => 'root',
        'dbpass' => 'unilabpp1465'
    ];
} else {
    define("BASE_URL", "http://192.168.0.14/pesquisas/");
    $config = [
        'dbname' => 'pesquisas',
        'host' => '192.168.0.14',
        'dbuser' => 'root',
        'dbpass' => 'unilabpp1465'
    ];
}

global $db;
try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES uft8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    throw new $erro->getMessage();
}
