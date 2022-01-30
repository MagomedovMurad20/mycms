<?php

namespace core\base\settings;

class Settings
{
    static private $_instance;
    private $routes = [
        'admin'=>[
            'name'=>'admin',
            'path'=>'core/admin/controller/',
            'hrUrl'=>false,
        ],
        'setting'=>[
            'path'=>'core/base/settings/'
        ],
        'plugins'=>[
            'path'=>'core/plugins/',
            'hrUrl'=>false
        ],
        'user'=>[
            'path'=>'core/user/controller/',
            'hrUrl'=> true,
            'routes'=>[

            ]
        ],
        'default'=>[
            'controller'=>'IndexController',
            'inputMethod'=>'inputData',
            outputMethod=>'outputData'
        ],
    ];


    private function __construct()
    {
    }
    private function __clone()
    {
    }

    public static function getInstance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self;
    }

}



