<?php

class staticMethod 
{
    public static function staticFunc()
    {
        echo "Inin adalah static function Method";
    }
}
staticMethod::staticFunc();
echo "<br>";

class staticMethod2
{
    public static $oop = "Ini adalah statik function v3";
    public static function staticFunc2()
    {
        echo self::$oop;
    }
}
staticMethod2::staticFunc2();