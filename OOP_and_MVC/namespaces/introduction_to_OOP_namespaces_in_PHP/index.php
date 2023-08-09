<?php
   /*
        #1
        Пусть у вас есть папка core и папка project. В каждой из папок
        есть свой класс Controller. Сделайте так, чтобы эти классы 
        принадлежали разным пространствам имен. В файле index.php
        создайте объекты одного и второго классов.
   */
  require_once '/core/Controller.php';
  require_once '/project/Controller.php';

  $core = new \Core\Controller;
  $project = new \Project\Controller;