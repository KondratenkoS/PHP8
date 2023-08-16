<?php
    /*
        #1
        Упростите следующий код с использованием use:

        namespace Project;
        
        class Test
        {
            public function __construct()
            {
                $pageController  = new \Resource\Controller\Page;
                $pageModel       = new \Resource\Model\Page;
            }
        }

        #2
        Упростите следующий код с использованием use:

        namespace Project\Data;
        
        class Test
        {
            public function __construct()
            {
                $pageController  = new \Project\Data\Controller\Page;
                $pageModel       = new \Project\Data\Model\Page;
            }
        }
    */

    #1
    namespace Project;
    use \Resource\Controller\Page as PageControll;
    use \Resource\Model\Page as ModelControll;
        class Test
        {
            public function __construct()
            {
                $pageController  = new PageControll;
                $pageModel       = new ModelControll;
            }
        }

    #2
    namespace Project\Data;
    use \Controller\Page as PageController;
    use \Model\Page as PageModel;

    class Test
    {
        public function __construct()
        {
            $pageController  = new PageController;
            $pageModel       = new PageModel;
        }
    }