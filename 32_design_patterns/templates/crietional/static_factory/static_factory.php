<?php

// interface Worker
// {
//     public function work(): void;
// }

// class Developer implements Worker
// {
//     public function work(): void
//     {
//         echo "I'm Developer<br>";
//     }
// }

// class Designer implements Worker
// {
//     public function work(): void
//     {
//         echo "I'm Designer<br>";
//     }
// }

// class WorkerFactory
// {
//     public static function make($workerTitle): ?Worker
//     {
//         $ClassName = strtoupper($workerTitle);

//         if(class_exists($ClassName)) {
//             return new $ClassName();
//         }
//         return null;
//     }
// }

// $worker1 = WorkerFactory::make('Designer');
// $worker2 = WorkerFactory::make('Developer');

// $worker1->work();
// $worker2->work();