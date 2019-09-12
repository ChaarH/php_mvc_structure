<?php
require_once 'enviroment.php';
if (ENVIROMENT == 'development') {
    define("BASE_URL", "http://localhost/nomedoprojeto/");
    $config = [
        'dbname' => 'nomedobanco',
        'host' => 'ipdobanco',
        'dbuser' => 'usuario',
        'dbpass' => 'senha'
    ];
} else {
    define("BASE_URL", "http://enderecodoseusite/nomedoprojeto/");
    $config = [
        'dbname' => 'nomedobanco',
        'host' => 'ipdobanco',
        'dbuser' => 'usuario',
        'dbpass' => 'senha'
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
