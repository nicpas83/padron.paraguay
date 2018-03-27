<?php

if (!defined('CAKE_FRAMEWORK')) {
    define('CAKE_FRAMEWORK', DS . 'Applications' . DS . 'MAMP' . DS . 'htdocs' . DS . 'framework');
}

if (!defined('WWW')) {
    define('WWW', '/'); // no usar la constante DS
}

if (!class_exists('AppConfig')) {

    class AppConfig {

        public static $array = [
            'includes' => [
                'bootstrap' => true,
                'font-awesome' => true,
                'highcharts' => true,
                'php' => true,
                'hoverIntent' => true,
                'kendoui' => true,
                'jquery' => [
                    'ui' => true,
                    'galleriffic' => true,
                    'scrollTo' => true,
                    'fancybox' => true,
                    'opacityrollover' => true,
                    'alerts' => true,
                    'tipsy' => true,
                    'sticky' => true,
                ],
            ],
            'push_server' => [
                'enabled' => false,
                'debug' => true,
                'ssl' => false,
                'host' => '127.0.0.1',
                'port' => 8000,
                'system' => 'framework'
            ],
            'maint' => [
                'js_validation' => true,
            ],
            'search_list' => [
                'export' => true,
            ],
            'site' => [
                'serial' => [
                    'A7A02-AA5FF-8C093-FDD10-CE4C1-5581F-3E5AF-FA1BB',
                    'E4257-BD5B9-62656-145B7-ED64A-420A0-A298C-D1464',
                ],
                'ajax' => [
                    'enabled' => false,
                    'loading' => "Cargando contenido",
                ],
            ],
            'users' => [
                'login' => [
                    'ban' => false,
                    'forget' => true,
                ],
            ],
        ];

        public static function get($str, $default = null) {
            $pointer = self::$array;
            $parts = explode(".", $str);
            foreach ($parts as $part) {
                if (!isset($pointer[$part])) {
                    return $default;
                }
                $pointer = $pointer[$part];
            }
            return $pointer;
        }

    }

}