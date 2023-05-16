<?php
class staticMethod{
    public static function staticFunc(){
        echo "Ini adalah static function method";
    } 
}
staticMethod::staticFunc();
echo "<br>";

class staticMethod2{
    public static $oop = "Ini adalah metode static function versi 2";
    public static function staticFunc2(){
        echo self::$oop;
    }
}
staticMethod2::staticFunc2();
?>