<?php
    //Load config file
    require 'config/config.php';

    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libs/'.$className.'.php';
    });
?>