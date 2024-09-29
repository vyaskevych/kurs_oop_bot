<?php

class ClassLoader
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new ClassLoader();
        }

        spl_autoload_register([self::$instance, "load"]);
    }

    public function load($name) {

//        include_once($_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php");

        $file = __DIR__ . "/" . str_replace("\\", "/", $name) . ".php";
        if (file_exists($file)) {
            include_once($file);
        } else {
            throw new Exception("File for class $name not found.");
        }
    }

}