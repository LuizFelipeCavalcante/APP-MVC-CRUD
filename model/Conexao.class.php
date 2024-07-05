<?php

 class Conexao{
    public static $instance;

    public static function get_instance()
    {
        if(!isset(self::$instance)){
            self::$instance = new PDO("mysql:host=localhost;dbname=primeirocrud", "root","",
        );
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}
?>