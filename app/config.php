<?php 

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemagestionescolar');

define('APP_NAME','Sistema Gestión Escolar');
define('APP_URL','http://localhost/SistemaGestionEscolar');
define('KEY_API_MAPS','');


$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

/// Conexión

try{
    $pdo= new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    ///echo "conexión exitosa a la base de datos";
} catch (PDOException $e) {
    echo "error no se pudo conectar a la base de datos";
}



/// Hora y Fecha
date_default_timezone_set('America/Santiago');
$fechahora = date(format:'Y-m-d H:i:s');
$fecha_actual = date(format:'Y-m-d');
$fecha_dia = date(format:'d');
$fecha_mes = date(format:'m');
$fecha_ano = date(format:'Y');


?>