<?php

define ('VG_ACCESS', true);
header('Content-Type:text/html; charset-utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';


try{
    (new \n1\A());
}
catch (RoutException $e){
    exit($e->getMessage());
}