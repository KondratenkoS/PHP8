<?php

// abstract class Registry
// {
//     private static array $services = [];

//     final public static function setService($key, Service $service)
//     {
//         self::$services[$key] = $service;
//     }

//     final public static function getService($key): string|Service
//     {
//         if(isset(self::$services[$key]))
//         {
//             return self::$services[$key];
//         }
//         return 'This service does not exist';
//     }
// }

// class Service
// {
   
// }

// $service = new Service;
// $service1 = new Service;
// $service2 = new Service;

// Registry::setService(1, $service);
// Registry::setService(2, $service1);
// Registry::setService(3, $service2);

// $services = Registry::getService(3);

// var_dump($services);