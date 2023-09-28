<?php

// interface NativeWorker
// {
//     public function countSalary(): int;
// }

// interface OutsourceWorker
// {
//     public function countSalaryByHour($hours): int;
// }

// class NativeDeveloper implements NativeWorker
// {
//     public function countSalary(): int
//     {
//         return 3000 * 20;
//     }
// }

// class OutsourceDeveloper implements OutsourceWorker
// {
//     public function countSalaryByHour($hours): int
//     {
//         return $hours * 500;
//     }
// }

// class OutsourceWorkerAdapter implements NativeWorker
// {
//     private OutsourceWorker $outsourceWorker;

//     public function __construct(OutsourceWorker $outsourceWorker)
//     {
//         $this->outsourceWorker = $outsourceWorker;
//     }

//     public function countSalary(): int
//     {
//         return $this->outsourceWorker->countSalaryByHour(80);
//     }
// }


// $nativeDev = new NativeDeveloper();
// $outsourceDev = new OutsourceDeveloper();

// $outsourceWorkerAdapter = new OutsourceWorkerAdapter($outsourceDev);

// var_dump($nativeDev->countSalary());
// echo '<br>';
// var_dump($outsourceWorkerAdapter->countSalary());