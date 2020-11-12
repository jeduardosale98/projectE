<?php
//BASE_PATH -> path absoluto al directorio de nuestro proyecto
define('BASE_PATH',realpath(__DIR__.'/../../'));
//este es el archivo que composer usare para autocargar los paquetes VLUCAS para los env
require_once __DIR__.'/../../vendor/autoload.php';

$dotEnv = Dotenv\Dotenv::create(BASE_PATH);
$dotEnv->load();

?>