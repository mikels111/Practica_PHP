<?php
class ConfiguracionStatic{
    public static $color;
    public static $newsletter;
    public static $entorno;

    public static function getColor(){
        return self::$color;//En este caso que el método es estatico se utiliza self en vez de this para acceder a la propiedad
    }
    public static function setColor($color){
        self::$color=$color;
    }
}