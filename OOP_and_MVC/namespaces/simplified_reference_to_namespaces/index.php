<?php
    /*
        #1
        Даны два класса:

            namespace Modules\Shop;
            
            class Cart
            {
                
            }

            namespace Modules\Shop;
            
            class UserCart extends \Modules\Shop\Cart
            {
                
            }

        ростите код для наследования класса, учитывая то,
        что оба класса находятся в одном пространстве имен.

        #2
        Пусть в файле index.php создается объект класса Controller:

            namespace Admin;
            
            new \Admin\Controller;

        Упростите код для создания объекта, учитывая то, что создание 
        объекта класса происходит в том же пространстве имен, которому 
        принадлежит класс.
        
        #3
        Даны два класса:

            namespace Modules\Shop\Core;
            
            class Cart
            {
                
            }

            namespace Modules\Shop;
            
            class UserCart extends \Modules\Shop\Core\Cart
            {
                
            }

        стите код для наследования класса, учитывая то, что пространства
        имен наших классов имеют совпадающую часть.

        #4
        Даны два класса:

            namespace Core\Data;
            
            class Controller
            {
                
            }

            namespace Core\Data;
            
            class Model
            {
                
            }

        Вот так создаются объекты этих классов в файле index.php:

            namespace Core\Data;
            
            $controller = new \Core\Data\Controller;
            $model      = new \Core\Data\Model;

        Упростите код для создания объектов, учитывая пространство имен, в котором создаются объекты наших классов.
    */
    #1
    namespace Modules\Shop;
            
    class Cart
    {
        
    }

    namespace Modules\Shop;
    
    class UserCart extends Cart
    {
        
    }

    #2
    namespace Admin;
            
    new Controller;

    #3
    namespace Modules\Shop\Core;
            
    class Cart
    {
                
    }

    namespace Modules\Shop;
            
    class UserCart extends \Core\Cart
    {
                
    }

    #4
    namespace Core\Data;
            
    class Controller
    {
                
    }

    namespace Core\Data;
            
    class Model
    {
                
    }

    namespace Core\Data;
            
    $controller = new Controller;
    $model      = new Model;