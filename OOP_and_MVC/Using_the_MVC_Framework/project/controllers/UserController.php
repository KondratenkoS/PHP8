<?php
namespace Project\Controllers;
use Core\Controller;

/*
    #1
    Реализуйте контроллер UserController, содержащий следующий массив:

        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    
    #2
    В контроллере UserController, сделайте действие show, которое будет 
    выводить юзера по определенному id. Пусть оно будет доступно по 
    адресу следующего вида: /user/:id/.

    #3
    В контроллере UserController, сделайте действие info, которое будет 
    выводить имя или возраст заданного юзера. Пусть это действие будет 
    доступно по адресу следующего вида: /user/:id/:key/, где key будет 
    иметь значение 'name', 'age' или 'salary'.
    
    #4
    В контроллере UserController, сделайте действие all, которое будет 
    выводить список всех юзеров на экран. Пусть это действие будет 
    доступно по адресу следующего вида: /user/all/ 
    (параметров тут никаких не будет).

    #5
    В контроллере UserController, сделайте действие first, которое будет 
    выводить список N первых юзеров на экран. Пусть это действие будет 
    доступно по адресу следующего вида: /user/first/:n/, где в параметре 
    будет количество юзеров, которые следует вывести на экран.
*/

class UserController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }

    public function first($param){
        $n = $param['n'];

        foreach($this->users as $id => $value)
        {
            if($id <= $n){
                echo 'Имя работника - ' . $value['name'] . '. Его возраст - ' . $value['age'] . '. Его зарплата - ' . $value['salary'] . '.<br>';
            }
        }

    }

    public function all(){
        foreach($this->users as $id => $value){
            echo 'Имя работника - ' . $value['name'] . '. Его возраст - ' . $value['age'] . '. Его зарплата - ' . $value['salary'] . '.<br>';
        }
    }

    public function info($param){
        $userId = $param['id'];
        $infoKey = $param['key'];
        echo $this->users[$userId][$infoKey].'<br>';
    }

    public function show($param)
    {
       $userId = $param['id'];

       echo $this->users[$userId]['name'].'<br>';
       echo $this->users[$userId]['age'].'<br>';
       echo $this->users[$userId]['salary'].'<br>';
    }
}