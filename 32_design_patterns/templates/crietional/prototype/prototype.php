<?php

// abstract class WorkerPrototype
// {
//     protected string $name;
//     protected string $position;

//     /**
//      * @param string $name 
//      */
//     public function setName($name)
//     {
//         $this->name = $name;
//     }

//     /**
//      * @param string $position 
//      */
//     public function setPosition($position)
//     {
//         $this->position = $position;
//     }

//     /**
//      * @return string $name 
//      */
//     public function getName(): string
//     {
//         return $this->name;
//     }

//     /**
//      * @return string $position 
//      */
//     public function getPosition(): string
//     {
//        return $this->position;
//     }
// }

// class Developer extends WorkerPrototype
// {
//     protected string $position = 'Developer';
// }

// $dev = new Developer();
// $dev2 = clone $dev;

// $dev2->setName('Hell');

// print_r($dev2->getName());
// print_r($dev2->getPosition());