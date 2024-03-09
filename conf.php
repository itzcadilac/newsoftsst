<?php
//session_start();

define('APP_BASEDIR', dirname(__FILE__));
//print APP_BASEDIR;
require(APP_BASEDIR . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


require_once APP_BASEDIR . '/clases/util/ConexionDB.class.php';
require_once APP_BASEDIR . '/clases/util/Fecha.class.php';

require_once APP_BASEDIR . '/clases/dao/ValidacionDAO.class.php';
require_once APP_BASEDIR . '/clases/dao/ConsultasDAO.class.php';


require_once APP_BASEDIR . '/clases/vo/UsuarioVO.class.php';
require_once APP_BASEDIR . '/clases/vo/SolicitudVO.class.php';


?>