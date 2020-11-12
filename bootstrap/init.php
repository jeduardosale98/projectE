<?php
//comenzar la session
if(!isset($_SESSION)){
    session_start();
}

//cargar las variables de entorno
require_once __DIR__.'/../app/config/_env.php';

?>