<?php
    /*
        #1
        Упростите следующий код с использованием use:

        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                // Создаем 3 объекта одного класса:
                $data1  = new \Core\Users\Data('user1');
                $data2  = new \Core\Users\Data('user3');
                $data3  = new \Core\Users\Data('user3');
            }
        }

        #2
        Даны следующие классы:

        namespace Core\Admin;
        
        class Controller
        {
            
        }

        namespace Users;
        
        class Page extends \Core\Admin\Controller
        {
            
        }

        Упростите код наследования класса, применив команду use.

        #3
        Упростите следующий код с использованием use:

        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                $model = new \Core\Admin\Model;
                $data  = new \Core\Users\Storage\Data;
            }
        }

        #4
        Упростите следующий код с использованием use:

        namespace Core\Storage;
        
        class Model
        {
            public function __construct()
            {
                $database  = new \Core\Storage\DataBase;
            }
        }
    */

    #1
    namespace Project;
    use \Core\Users\Data;

    class Test
    {
        public function __construct()
        {
            // Создаем 3 объекта одного класса:
            $data1  = new Data('user1');
            $data2  = new Data('user3');
            $data3  = new Data('user3');
        }
    }

    #2

    namespace Core\Admin;
        
    class Controller
    {
        
    }

    namespace Users;
    use \Core\Admin\Controller;

    class Page extends Controller
    {
        
    }

    #3
    namespace Project;
    use \Core\Admin\Model;
    use \Core\Users\Storage\Data;

    class Test
    {
        public function __construct()
        {
            $model = new Model;
            $data  = new Data;
        }
    }

    #4
    namespace Core\Storage;
    use DataBase;
        class Model
        {
            public function __construct()
            {
                $database  = new DataBase;
            }
        }