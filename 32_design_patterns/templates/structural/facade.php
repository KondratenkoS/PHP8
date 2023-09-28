<?php

// class WorkerFacade
// {
//     private Developer $developer;
//     private Designer $designer;

//     public function __construct(Developer $developer, Designer $designer)
//     {
//         $this->developer = $developer;
//         $this->designer = $designer;
//     }

//     public function startWork()
//     {
//         $this->developer->startDevelop();
//         $this->designer->startDesigning();
//     }

//     public function stopWork()
//     {
//         $this->developer->stopDevelop();
//         $this->designer->stopDesigning();
//     }
// }

// class Developer
// {
//     public function startDevelop()
//     {
//         printf('Start develop<br>');
//     }

//     public function StopDevelop()
//     {
//         printf('Stop develop<br>');
//     }
// }

// class Designer
// {
//     public function startDesigning()
//     {
//         printf('Start designing<br>');
//     }

//     public function StopDesigning()
//     {
//         printf('Stop designing<br>');
//     }
// }

// $developer = new Developer();
// $designer = new Designer();

// $workerFacade = new WorkerFacade($developer, $designer);

// $workerFacade->startWork();
// $workerFacade->stopWork();