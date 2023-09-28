<?php
namespace StaticExample;

class StaticExample2
{
    public static int $aNum = 0;

    public static function sayHello(): void
    {
        self::$aNum++;
        echo 'Привет! (' . self::$aNum . ')<br>';
    }
}