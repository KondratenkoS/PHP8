<?php

// class WokerList
// {
//     private array $list = [];
//     private int $index = 0;

//     public function setList(array $list): void
//     {
//         $this->list = $list;
//     }

//     public function setIndex(int $index): void
//     {
//         $this->index = $index;
//     }

//     public function getList(): array
//     {
//         return $this->list;
//     }

//     public function getIndex(): int
//     {
//         return $this->index;
//     }

//     public function getItem($key): ?Worker
//     {
//         if(isset($this->list[$key])) {
//             return $this->list[$key];
//         }
//         return null;
//     }

//     public function next()
//     {
//         if($this->index < count($this->list) - 1) {
//             $this->index++;
//         }
//     }

//     public function prev()
//     {
//         if($this->index !== 0) {
//             $this->index--;
//         }
//     }

//     public function getByIndex(): Worker
//     {
//         return $this->list[$this->index];
//     }
// }


// class Worker
// {
//     private string $name = '';

//     public function __construct(string $name)
//     {
//         $this->name = $name;
//     }

//     public function getName(): string
//     {
//         return $this->name;
//     }
// }

// $worker = new Worker('Hell');
// $worker2 = new Worker('Hellor');
// $worker3 = new Worker('Hellon');

// $workerList = new WokerList();
// $workerList->setList([$worker, $worker2, $worker3]);
// $workerList->next();

// var_dump($workerList->getByIndex()->getName());