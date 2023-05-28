<?php

/**
 * Creacion de una constante la cual nos guardara la ruta de nuestro proyecto
 */

include_once('function.php');
if(!defined('ROOT')){
    define("ROOT", 'http://'.$_SERVER['HTTP_HOST'].getFolderProject());
}