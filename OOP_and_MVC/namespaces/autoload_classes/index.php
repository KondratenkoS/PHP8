<?php
    /*
        В файле index.php включите автоматическую загрузку классов.
        Следуя соглашению об именах папок и файлов сделайте класс Core\User,
        класс Core\Admin\Controller и класс Project\User\Data.
        В файле index.php создайте объекты этих классов.
    */
    spl_autoload_register();

    $user = new Core\User\User;
    $controller = new Core\Admin\Controller\Controller;
    $data = new Project\User\Data\Data;

    echo $user->getUser() . '<br>';
    echo $controller->getController() . '<br>';
    echo $data->getData() . '<br>';