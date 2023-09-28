<?php

// interface TaskInterface
// {
//     public function getAray(): array;
// }

// abstract class Handler
// {
//     private Handler $successor;

//     public function __construct(?Handler $successor)
//     {
//         $this->successor = $successor;
//     }

//     final public function handle(TaskInterface $task)
//     {
//         $proceed = $this->processing($task);
//         if($proceed === null && $this->successor) {
//             $proceed = $this->successor->handle($task);
//         }
//         return $proceed;
//     }

//     abstract public function processing(TaskInterface $task): ?array;
// }

// class DevTask implements TaskInterface
// {
//     private array $arr = [1, 2, 3];
    
//     public function getAray(): array
//     {
//         return $this->arr;
//     }
// }

// class Jun extends Handler
// {
//     public function processing(TaskInterface $task): ?array
//     {
//         return null;
//     }
// }

// class Middle extends Handler
// {
//     public function processing(TaskInterface $task): ?array
//     {
//         return null;
//     }
// }

// class Senior extends Handler
// {
//     public function processing(TaskInterface $task): ?array
//     {
//         return $task->getAray();
//     }
// }


// $task = new DevTask();

// $sen = new Senior(null);
// $mid = new Middle($sen);
// $jun = new Jun($mid);

// var_dump($jun->handle($task));