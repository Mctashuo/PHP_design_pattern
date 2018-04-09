<?php
/**
 * Created by PhpStorm.
 * User: Mctashuo
 * Date: 4/9/2018
 * Time: 8:56 AM
 */


class Preferences
{
    private $props = [];

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }


    public function setProps(String $key, String $value)
    {
        $this->props[$key] = $value;
    }

    public function getProps(string $key) : string
    {
        return $this->props[$key];
    }
}