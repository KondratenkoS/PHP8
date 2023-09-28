<?php

final class Connection
{
    private static ?self $instance = null;
    private static string $name;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return self::$name;
    }

    /**
     * @param string
     */
    public static function setName(string $name): void
    {
        self::$name = $name;
    }

    public static function getIstance(): self
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __clone()
    {
        
    }

    public function __wakeup()
    {
        
    }
}


$connection = Connection::getIstance();
$connection::setName('HellDB');

print_r($connection::getName());