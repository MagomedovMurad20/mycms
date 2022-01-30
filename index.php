<?php

define ('VG_ACCESS', true);
header('Content-Type:text/html; charset-utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/internal_settings.php';

function load1 ($className)
{
    $className = str_replace('\\', '/', $className);
    include $className.".php";
}

spl_autoload_register("load1");

(new \n1\A());

echo 'hello';

