<?php


namespace App\Blog\Core;


class BlogApp
{
    public static $app;
    public static  function get_instance()
    {
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }

    protected static function getParams()
    {
        $params = require CONF . '/config/params.php';
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k,$v);

            }
        }
    }
}
