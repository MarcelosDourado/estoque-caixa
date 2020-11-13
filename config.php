<?php 
require 'environment.php';
$config = array();
if('ENVIRONMENT'=='development'){
    define("BASE_URL", "http://localhost/Portifolio/estoque-caixa");
    $config['dbname'] = 'estoque';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] ='';

}
else{
    define("BASE_URL", "http://localhost/Portifolio/estoque-caixa");
    $config['dbname'] = 'estoque';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] ='';
}
global $db;

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], 
    array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
}catch(PDOException $e){
    echo "falhou".$e->getMessage();
    exit;
}

?>