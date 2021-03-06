<?php

use \core\base\exceptions\RouteException;

defined('VG_ACCESS') or die ("Access denied");

const TEMPLATE = 'templates/default';
const ADMIN_TEMPLATES = 'core/admin/views/';

const COOCKIE_VERSION = '2.0.0';
const CREATE_KEY = '';
const COOCKIE_TIME = 60;
const BOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts'=> []
];

const USER_CSS_JS = [
    'styles' => [],
    'scripts'=> []
];

function autoLoadMainClasses ($className)
{
    $className = str_replace('\\', '/', $className);

    if(!include_once $className.".php"){
        throw new RouteException("не верное имя класса" .$className);
    }

}

spl_autoload_register("autoLoadMainClasses");



